<?php
namespace Codazon\Shopbybrandpro\Controller\Index\SearchBrands;

/**
 * Interceptor class for @see \Codazon\Shopbybrandpro\Controller\Index\SearchBrands
 */
class Interceptor extends \Codazon\Shopbybrandpro\Controller\Index\SearchBrands implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Framework\App\Action\Context $context, \Magento\Framework\Registry $coreRegistry, \Magento\Store\Model\StoreManagerInterface $storeManager, \Magento\Framework\View\Result\LayoutFactory $resultLayoutFactory, \Codazon\Shopbybrandpro\Model\BrandFactory $brandFactory)
    {
        $this->___init();
        parent::__construct($context, $coreRegistry, $storeManager, $resultLayoutFactory, $brandFactory);
    }

    /**
     * {@inheritdoc}
     */
    public function getUrl($urlKey, $params = null)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getUrl');
        if (!$pluginInfo) {
            return parent::getUrl($urlKey, $params);
        } else {
            return $this->___callPlugins('getUrl', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function getAllBrandsArray($query = false, $orderBy = 'brand_label', $order = 'asc')
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getAllBrandsArray');
        if (!$pluginInfo) {
            return parent::getAllBrandsArray($query, $orderBy, $order);
        } else {
            return $this->___callPlugins('getAllBrandsArray', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function execute()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'execute');
        if (!$pluginInfo) {
            return parent::execute();
        } else {
            return $this->___callPlugins('execute', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function getThumbnailImage($brand, array $options = [])
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getThumbnailImage');
        if (!$pluginInfo) {
            return parent::getThumbnailImage($brand, $options);
        } else {
            return $this->___callPlugins('getThumbnailImage', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function dispatch(\Magento\Framework\App\RequestInterface $request)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'dispatch');
        if (!$pluginInfo) {
            return parent::dispatch($request);
        } else {
            return $this->___callPlugins('dispatch', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function getActionFlag()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getActionFlag');
        if (!$pluginInfo) {
            return parent::getActionFlag();
        } else {
            return $this->___callPlugins('getActionFlag', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function getRequest()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getRequest');
        if (!$pluginInfo) {
            return parent::getRequest();
        } else {
            return $this->___callPlugins('getRequest', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function getResponse()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getResponse');
        if (!$pluginInfo) {
            return parent::getResponse();
        } else {
            return $this->___callPlugins('getResponse', func_get_args(), $pluginInfo);
        }
    }
}
