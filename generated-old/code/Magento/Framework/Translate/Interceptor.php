<?php
namespace Magento\Framework\Translate;

/**
 * Interceptor class for @see \Magento\Framework\Translate
 */
class Interceptor extends \Magento\Framework\Translate implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Framework\View\DesignInterface $viewDesign, \Magento\Framework\Cache\FrontendInterface $cache, \Magento\Framework\View\FileSystem $viewFileSystem, \Magento\Framework\Module\ModuleList $moduleList, \Magento\Framework\Module\Dir\Reader $modulesReader, \Magento\Framework\App\ScopeResolverInterface $scopeResolver, \Magento\Framework\Translate\ResourceInterface $translate, \Magento\Framework\Locale\ResolverInterface $locale, \Magento\Framework\App\State $appState, \Magento\Framework\Filesystem $filesystem, \Magento\Framework\App\RequestInterface $request, \Magento\Framework\File\Csv $csvParser, \Magento\Framework\App\Language\Dictionary $packDictionary, ?\Magento\Framework\Filesystem\DriverInterface $fileDriver = null)
    {
        $this->___init();
        parent::__construct($viewDesign, $cache, $viewFileSystem, $moduleList, $modulesReader, $scopeResolver, $translate, $locale, $appState, $filesystem, $request, $csvParser, $packDictionary, $fileDriver);
    }

    /**
     * {@inheritdoc}
     */
    public function loadData($area = null, $forceReload = false)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'loadData');
        if (!$pluginInfo) {
            return parent::loadData($area, $forceReload);
        } else {
            return $this->___callPlugins('loadData', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function getData()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getData');
        if (!$pluginInfo) {
            return parent::getData();
        } else {
            return $this->___callPlugins('getData', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function getLocale()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getLocale');
        if (!$pluginInfo) {
            return parent::getLocale();
        } else {
            return $this->___callPlugins('getLocale', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function setLocale($locale)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'setLocale');
        if (!$pluginInfo) {
            return parent::setLocale($locale);
        } else {
            return $this->___callPlugins('setLocale', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function getTheme()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getTheme');
        if (!$pluginInfo) {
            return parent::getTheme();
        } else {
            return $this->___callPlugins('getTheme', func_get_args(), $pluginInfo);
        }
    }
}
