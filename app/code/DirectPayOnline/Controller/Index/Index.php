<?php
/**
 * Copyright © 2016 Magento. All rights reserved.
 * See COPYING.txt for license details.
 */
namespace DirectPayOnline\Plug\Controller\Index;
 
use Magento\Framework\UrlInterface;
use DirectPayOnline\Plug\Controller\Index\DirectPayCurl;

/**
* Main Controller
*/
class Index extends \Magento\Framework\App\Action\Action
{
	protected $_paymentPlugin;
	protected $_scopeConfig;
	protected $_session;
	protected $_order;
	protected $messageManager;
	protected $_redirect;
	protected $_orderId;
	protected $_storeManager;
	protected $_orderManagement;
	protected $_url;

	public function __construct(
		\Magento\Framework\App\Action\Context $context,
        \DirectPayOnline\Plug\Model\Payment $paymentPlugin,
        \Magento\Framework\App\Config\ScopeConfigInterface $scopeConfig,
        \Magento\Checkout\Model\Session $session,
        \Magento\Sales\Model\Order $order,
        \Magento\Store\Model\StoreManagerInterface $storeManager,
        \Magento\Sales\Api\OrderManagementInterface $orderManagement
    ){
        $this->_paymentPlugin   = $paymentPlugin;
        $this->_scopeConfig     = $scopeConfig;
        $this->_session         = $session;
        $this->_order 		    = $order;
        $this->_storeManager    = $storeManager;
        $this->_orderManagement = $orderManagement;
        $this->messageManager   = $context->getMessageManager();
        $this->_url             = $context->getUrl();
		parent::__construct($context);
	}
	
	public function execute()
	{
		/** check if isset success from 3g gateway */
		$success = filter_input(INPUT_GET, 'success');
		$cancel  = filter_input(INPUT_GET, 'cancel');

		if (isset($success) && !empty($success)){
			
			$orderId = $success;
			$transactionToken = filter_input(INPUT_GET, 'TransactionToken');

		    $this->verifyTokenResponse($transactionToken, $orderId);
		}
		/** check if isset cancel from 3g gateway */
		elseif (isset($cancel) && !empty($cancel)){
			$orderId = $cancel;
			$errorMessage = _('Payment canceled by customer');
		    $this->restoreOrderToCart($errorMessage, $orderId);
		}
		else {
			/** @var \Magento\Checkout\Model\Session  $session*/
			$order   = $this->_session->getLastRealOrder();
			$orderId = $order->getId();	
			
			if (!isset($orderId) || !$orderId) {

				$message = 'Invalid order ID, please try again later';
				/** @var  \Magento\Framework\Message\ManagerInterface $messageManager */
				$this->messageManager->addError($message);
				return $this->_redirect('checkout/cart');
			}


			$comment = 'Payment has not been processed yet';

			$this->setCommentToOrder($orderId, $comment);


			/** @var  \Magento\Sales\Api\OrderManagementInterface $orderManagement */
			$this->_orderManagement->hold($orderId); //cancel the order
			
			$this->_orderId  = $orderId;

			$billingDetails = $this->getBillingDetailsByOrderId($orderId);
			$configDetails	= $this->getPaymentConfig();



			/** Set new directPayCurl object */
			$directPayCurl  =  new DirectPayCurl($billingDetails, $configDetails);
			$response = $directPayCurl->directPaytTokenResult();

			$this->checkDirectPayResponse($response);
		}
		
	}

	public function setCommentToOrder($orderId, $comment)
	{
		$order = $this->_order->load($orderId);
		$order->addStatusHistoryComment($comment);
		$order->save();
	}

	public function verifyTokenResponse($transactionToken, $orderId)
	{
		if (!isset($transactionToken)) {
			$errorMessage = _('Transaction Token error, please contact support center');
			$this->restoreOrderToCart($errorMessage, $orderId);
		}

		/** get verify token response from 3g */
		$response = $this->verifyToken($transactionToken);
		if ($response){

			if ($response->Result[0] == '000'){

				$this->_orderManagement->unHold($orderId);
				$comment = 'Payment has been processed successfully';
				$this->setCommentToOrder($orderId, $comment);
				return $this->_redirect('checkout/onepage/success');
			}
			else{

				$errorCode = $response->Result[0];
				$errorDesc = $response->ResultExplanation[0];
				$errorMessage = _('Payment Failed: '.$errorCode. ', '.$errorDesc);
				$this->restoreOrderToCart($errorMessage, $orderId);
			}
		}
	}

	/**
	 * Verify paymnet token from 3G
	 */
	public function verifyToken($transactionToken)
	{	
		$configDetails	= $this->getPaymentConfig();

		$inputXml = '<?xml version="1.0" encoding="utf-8"?>
					<API3G>
					  <CompanyToken>'.$configDetails['company_token'].'</CompanyToken>
					  <Request>verifyToken</Request>
					  <TransactionToken>'.$transactionToken.'</TransactionToken>
					</API3G>';

		$url = $configDetails['gateway_url']."/API/v6/";
	
		$ch = curl_init();

		curl_setopt($ch, CURLOPT_URL, $url);
		curl_setopt($ch, CURLOPT_HTTPAUTH, CURLAUTH_ANY);
		curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
		curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
		curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
		curl_setopt($ch, CURLOPT_SSLVERSION,6);
		curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type: text/xml'));
		curl_setopt($ch, CURLOPT_POSTFIELDS, $inputXml);

		$response = curl_exec($ch);

		curl_close($ch);

		if ($response !==  FALSE) {
			/** convert the XML result into array */
    		$xml = simplexml_load_string($response);
    		return $xml;
    	}
		return false;
	}
	/**
	 * Check Direct pay response for the first request
	 */
	public function checkDirectPayResponse($response)
	{
		if ($response === FALSE) {
			
			/** cancel order and restore quote with error message */
			$errorMessage = _('Payment error: Unable to connect to the payment gateway, please try again later');
			$this->restoreOrderToCart($errorMessage, $this->_orderId);
		}
		else{
			/** manage xml response */ 
			$this->getXmlResponse($response);
		}
	}
	/**
	 * Get and check first xml response
	 */
	public function getXmlResponse($response)
	{
		/** convert the XML result into array */
        $xml = simplexml_load_string($response);

        /** if the result have error, cancel the order */
        if ($xml->Result[0] != '000') {
        	/**  create error message */
        	$errorMessage = _('Payment error code: '.$xml->Result[0]. ', '.$xml->ResultExplanation[0]);
        	/** cancel the order */
			$this->restoreOrderToCart($errorMessage, $this->_orderId);
        }

        /** get 3G gateway paymnet URL from config */
        $param = $this->getPaymentConfig();
        /** create url to redirect */
        $paymnetURL = $param['gateway_url']."/pay.php?ID=".$xml->TransToken[0];
     
        return $this->_redirect($paymnetURL);
	}
	/**
	 * Restore quote and cancel the order
	 * 
	 */
	public function restoreOrderToCart($errorMessage, $orderId)
	{

		/** @var \Magento\Sales\Api\OrderManagementInterface $orderManagement */
		$this->_orderManagement->unHold($orderId); //remove from hold

		$this->_orderManagement->cancel($orderId); //cancel the order
		/** add msg to cancel */
		$this->setCommentToOrder($orderId, $errorMessage);
	
		/** @var \Magento\Checkout\Model\Session $session */
		$this->_session->restoreQuote(); //Restore quote
		
		/** show error message on checkout/cart */
		$this->messageManager->addError($errorMessage);

		/** and redirect to chechout /cart*/ 
		return $this->_redirect('checkout/cart');
	}

	/**
	 * Get Billing Details By Order Id
	 * @return array $param
	 */
	public function getBillingDetailsByOrderId($orderId)
	{
		/** @var Magento\Sales\Model\Order $order */
		$order_information = $this->_order->loadByIncrementId($orderId);
		$billingDetails    = $order_information->getBillingAddress();
		$ordered_items     = $order_information->getAllItems();

		/** New products array */
		$productsArr = [];

		foreach($ordered_items as $key => $item){
			/** Product name */
			$productsArr[$key] = $item->getName();
		}

		$param = [
			'order_id'     => $orderId,
			'amount' 	   => number_format($order_information->getGrandTotal(), 2, '.', ''),
			'currency'     => $this->_storeManager->getStore()->getCurrentCurrency()->getCode(),
			'first_name'   => $billingDetails->getFirstName(),
			'last_name'    => $billingDetails->getLastname(),
			'email'        => $billingDetails->getEmail(),
			'phone' 	   => $billingDetails->getTelephone(),
			'address'      => $billingDetails->getStreetLine(1),
			'city'   	   => $billingDetails->getCity(),
			'zipcode'      => $billingDetails->getPostcode(),
			'country'      => $billingDetails->getCountryId(),
			'redirectURL'  => $this->_url->getUrl('directpayonline/index/index?success='.$orderId),
			'backURL'      => $this->_url->getUrl('directpayonline/index/index?cancel='.$orderId),
			'products' 	   => $productsArr
		];

		return $param;
	}
	/**
	 * Get configuration values (Store -> Sales -> Payment Method ->DirectPayModule)
	 * @return array $paramArr
	 */
	public function getPaymentConfig()
	{
		/** get types of configuration */
		$param = $this->configArr();
		/** create new array */
		$paramArr = [];

		foreach ($param as $single_param){
			/** get config values */
			$paramArr[$single_param] = $this->_scopeConfig->getValue('payment/directpayonline_plug/'.$single_param ,\Magento\Store\Model\ScopeInterface::SCOPE_STORE);
		}

		return $paramArr;
	}
	/**
	 * Set Configuration Array
	 * @return array $param
	 */
	public function configArr()
	{
        $param  = ['active','company_token','gateway_url','ptl_type','ptl','service_type'];
        return $param;
	}
}
