<?php
namespace Magento\Backend\Helper\Data;

/**
 * Interceptor class for @see \Magento\Backend\Helper\Data
 */
class Interceptor extends \Magento\Backend\Helper\Data implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Framework\App\Helper\Context $context, \Magento\Framework\App\Route\Config $routeConfig, \Magento\Framework\Locale\ResolverInterface $locale, \Magento\Backend\Model\UrlInterface $backendUrl, \Magento\Backend\Model\Auth $auth, \Magento\Backend\App\Area\FrontNameResolver $frontNameResolver, \Magento\Framework\Math\Random $mathRandom)
    {
        $this->___init();
        parent::__construct($context, $routeConfig, $locale, $backendUrl, $auth, $frontNameResolver, $mathRandom);
    }

    /**
     * {@inheritdoc}
     */
    public function getPageHelpUrl()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getPageHelpUrl');
        if (!$pluginInfo) {
            return parent::getPageHelpUrl();
        } else {
            return $this->___callPlugins('getPageHelpUrl', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function setPageHelpUrl($url = null)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'setPageHelpUrl');
        if (!$pluginInfo) {
            return parent::setPageHelpUrl($url);
        } else {
            return $this->___callPlugins('setPageHelpUrl', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function addPageHelpUrl($suffix)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'addPageHelpUrl');
        if (!$pluginInfo) {
            return parent::addPageHelpUrl($suffix);
        } else {
            return $this->___callPlugins('addPageHelpUrl', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function getUrl($route = '', $params = [])
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getUrl');
        if (!$pluginInfo) {
            return parent::getUrl($route, $params);
        } else {
            return $this->___callPlugins('getUrl', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function getCurrentUserId()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getCurrentUserId');
        if (!$pluginInfo) {
            return parent::getCurrentUserId();
        } else {
            return $this->___callPlugins('getCurrentUserId', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function prepareFilterString($filterString)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'prepareFilterString');
        if (!$pluginInfo) {
            return parent::prepareFilterString($filterString);
        } else {
            return $this->___callPlugins('prepareFilterString', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function generateResetPasswordLinkToken()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'generateResetPasswordLinkToken');
        if (!$pluginInfo) {
            return parent::generateResetPasswordLinkToken();
        } else {
            return $this->___callPlugins('generateResetPasswordLinkToken', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function getHomePageUrl()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getHomePageUrl');
        if (!$pluginInfo) {
            return parent::getHomePageUrl();
        } else {
            return $this->___callPlugins('getHomePageUrl', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function getAreaFrontName($checkHost = false)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getAreaFrontName');
        if (!$pluginInfo) {
            return parent::getAreaFrontName($checkHost);
        } else {
            return $this->___callPlugins('getAreaFrontName', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function isModuleOutputEnabled($moduleName = null)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'isModuleOutputEnabled');
        if (!$pluginInfo) {
            return parent::isModuleOutputEnabled($moduleName);
        } else {
            return $this->___callPlugins('isModuleOutputEnabled', func_get_args(), $pluginInfo);
        }
    }
}
