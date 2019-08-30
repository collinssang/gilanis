<?php
namespace Jmango360\Japi\Controller\Rest;

/**
 * Interceptor class for @see \Jmango360\Japi\Controller\Rest
 */
class Interceptor extends \Jmango360\Japi\Controller\Rest implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Framework\Session\SessionManagerInterface $sessionManager, \Magento\Framework\UrlInterface $url, \Magento\Framework\Registry $registry, \Magento\Framework\ObjectManagerInterface $objectManagerInterface, \Magento\Framework\App\Config\ScopeConfigInterface $scopeConfig, \Magento\Framework\App\AreaList $areaList, \Magento\Framework\App\State $appState, \Magento\Framework\Webapi\ServiceInputProcessor $serviceInputProcessor, \Magento\Framework\TranslateInterface $translator, \Magento\Framework\Locale\ResolverInterface $localeResolver, \Magento\Webapi\Controller\Rest\ParamsOverrider $paramsOverrider, \Magento\Store\Model\StoreManagerInterface $storeManager, \Magento\Customer\Model\Session $customerSession, \Jmango360\Japi\Model\Rest\ServiceOutputProcessor $serviceOutputProcessor, \Magento\Webapi\Model\Rest\Swagger\Generator $swaggerGenerator, \Jmango360\Japi\Controller\Rest\Router $router, \Jmango360\Japi\Controller\Rest\Request $request, \Jmango360\Japi\Controller\Rest\Response $response, \Jmango360\Japi\Logger\Logger $logger, \Jmango360\Japi\Helper\Data $japiHelper)
    {
        $this->___init();
        parent::__construct($sessionManager, $url, $registry, $objectManagerInterface, $scopeConfig, $areaList, $appState, $serviceInputProcessor, $translator, $localeResolver, $paramsOverrider, $storeManager, $customerSession, $serviceOutputProcessor, $swaggerGenerator, $router, $request, $response, $logger, $japiHelper);
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
}
