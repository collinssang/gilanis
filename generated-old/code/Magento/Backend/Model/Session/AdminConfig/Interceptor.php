<?php
namespace Magento\Backend\Model\Session\AdminConfig;

/**
 * Interceptor class for @see \Magento\Backend\Model\Session\AdminConfig
 */
class Interceptor extends \Magento\Backend\Model\Session\AdminConfig implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Framework\ValidatorFactory $validatorFactory, \Magento\Framework\App\Config\ScopeConfigInterface $scopeConfig, \Magento\Framework\Stdlib\StringUtils $stringHelper, \Magento\Framework\App\RequestInterface $request, \Magento\Framework\Filesystem $filesystem, \Magento\Framework\App\DeploymentConfig $deploymentConfig, $scopeType, \Magento\Backend\App\BackendAppList $backendAppList, \Magento\Backend\App\Area\FrontNameResolver $frontNameResolver, \Magento\Backend\Model\UrlFactory $backendUrlFactory, $lifetimePath = 'web/cookie/cookie_lifetime', $sessionName = 'admin')
    {
        $this->___init();
        parent::__construct($validatorFactory, $scopeConfig, $stringHelper, $request, $filesystem, $deploymentConfig, $scopeType, $backendAppList, $frontNameResolver, $backendUrlFactory, $lifetimePath, $sessionName);
    }

    /**
     * {@inheritdoc}
     */
    public function setOptions($options, $default = [])
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'setOptions');
        if (!$pluginInfo) {
            return parent::setOptions($options, $default);
        } else {
            return $this->___callPlugins('setOptions', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function getOptions()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getOptions');
        if (!$pluginInfo) {
            return parent::getOptions();
        } else {
            return $this->___callPlugins('getOptions', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function setOption($option, $value)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'setOption');
        if (!$pluginInfo) {
            return parent::setOption($option, $value);
        } else {
            return $this->___callPlugins('setOption', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function getOption($option)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getOption');
        if (!$pluginInfo) {
            return parent::getOption($option);
        } else {
            return $this->___callPlugins('getOption', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function toArray()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'toArray');
        if (!$pluginInfo) {
            return parent::toArray();
        } else {
            return $this->___callPlugins('toArray', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function setName($name, $default = null)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'setName');
        if (!$pluginInfo) {
            return parent::setName($name, $default);
        } else {
            return $this->___callPlugins('setName', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function getName()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getName');
        if (!$pluginInfo) {
            return parent::getName();
        } else {
            return $this->___callPlugins('getName', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function setSavePath($savePath)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'setSavePath');
        if (!$pluginInfo) {
            return parent::setSavePath($savePath);
        } else {
            return $this->___callPlugins('setSavePath', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function getSavePath()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getSavePath');
        if (!$pluginInfo) {
            return parent::getSavePath();
        } else {
            return $this->___callPlugins('getSavePath', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function setCookieLifetime($cookieLifetime, $default = null)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'setCookieLifetime');
        if (!$pluginInfo) {
            return parent::setCookieLifetime($cookieLifetime, $default);
        } else {
            return $this->___callPlugins('setCookieLifetime', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function getCookieLifetime()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getCookieLifetime');
        if (!$pluginInfo) {
            return parent::getCookieLifetime();
        } else {
            return $this->___callPlugins('getCookieLifetime', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function setCookiePath($cookiePath, $default = null)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'setCookiePath');
        if (!$pluginInfo) {
            return parent::setCookiePath($cookiePath, $default);
        } else {
            return $this->___callPlugins('setCookiePath', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function getCookiePath()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getCookiePath');
        if (!$pluginInfo) {
            return parent::getCookiePath();
        } else {
            return $this->___callPlugins('getCookiePath', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function setCookieDomain($cookieDomain, $default = null)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'setCookieDomain');
        if (!$pluginInfo) {
            return parent::setCookieDomain($cookieDomain, $default);
        } else {
            return $this->___callPlugins('setCookieDomain', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function getCookieDomain()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getCookieDomain');
        if (!$pluginInfo) {
            return parent::getCookieDomain();
        } else {
            return $this->___callPlugins('getCookieDomain', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function setCookieSecure($cookieSecure)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'setCookieSecure');
        if (!$pluginInfo) {
            return parent::setCookieSecure($cookieSecure);
        } else {
            return $this->___callPlugins('setCookieSecure', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function getCookieSecure()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getCookieSecure');
        if (!$pluginInfo) {
            return parent::getCookieSecure();
        } else {
            return $this->___callPlugins('getCookieSecure', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function setCookieHttpOnly($cookieHttpOnly)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'setCookieHttpOnly');
        if (!$pluginInfo) {
            return parent::setCookieHttpOnly($cookieHttpOnly);
        } else {
            return $this->___callPlugins('setCookieHttpOnly', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function getCookieHttpOnly()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getCookieHttpOnly');
        if (!$pluginInfo) {
            return parent::getCookieHttpOnly();
        } else {
            return $this->___callPlugins('getCookieHttpOnly', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function setUseCookies($useCookies)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'setUseCookies');
        if (!$pluginInfo) {
            return parent::setUseCookies($useCookies);
        } else {
            return $this->___callPlugins('setUseCookies', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function getUseCookies()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getUseCookies');
        if (!$pluginInfo) {
            return parent::getUseCookies();
        } else {
            return $this->___callPlugins('getUseCookies', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function __call($method, $args)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, '__call');
        if (!$pluginInfo) {
            return parent::__call($method, $args);
        } else {
            return $this->___callPlugins('__call', func_get_args(), $pluginInfo);
        }
    }
}
