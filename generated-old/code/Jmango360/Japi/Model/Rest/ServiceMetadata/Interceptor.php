<?php
namespace Jmango360\Japi\Model\Rest\ServiceMetadata;

/**
 * Interceptor class for @see \Jmango360\Japi\Model\Rest\ServiceMetadata
 */
class Interceptor extends \Jmango360\Japi\Model\Rest\ServiceMetadata implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Jmango360\Japi\Model\Config $config, \Magento\Webapi\Model\Cache\Type\Webapi $cache, \Magento\Webapi\Model\Config\ClassReflector $classReflector, \Magento\Framework\Reflection\TypeProcessor $typeProcessor)
    {
        $this->___init();
        parent::__construct($config, $cache, $classReflector, $typeProcessor);
    }

    /**
     * {@inheritdoc}
     */
    public function getServicesConfig()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getServicesConfig');
        if (!$pluginInfo) {
            return parent::getServicesConfig();
        } else {
            return $this->___callPlugins('getServicesConfig', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function getRoutesConfig()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getRoutesConfig');
        if (!$pluginInfo) {
            return parent::getRoutesConfig();
        } else {
            return $this->___callPlugins('getRoutesConfig', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function getServiceMetadata($serviceName)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getServiceMetadata');
        if (!$pluginInfo) {
            return parent::getServiceMetadata($serviceName);
        } else {
            return $this->___callPlugins('getServiceMetadata', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function getServiceName($interfaceName, $version, $preserveVersion = true)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getServiceName');
        if (!$pluginInfo) {
            return parent::getServiceName($interfaceName, $version, $preserveVersion);
        } else {
            return $this->___callPlugins('getServiceName', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function getRouteMetadata($serviceName)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getRouteMetadata');
        if (!$pluginInfo) {
            return parent::getRouteMetadata($serviceName);
        } else {
            return $this->___callPlugins('getRouteMetadata', func_get_args(), $pluginInfo);
        }
    }
}
