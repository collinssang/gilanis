<?php
namespace Magento\Directory\Model\PriceCurrency;

/**
 * Interceptor class for @see \Magento\Directory\Model\PriceCurrency
 */
class Interceptor extends \Magento\Directory\Model\PriceCurrency implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Store\Model\StoreManagerInterface $storeManager, \Magento\Directory\Model\CurrencyFactory $currencyFactory, \Psr\Log\LoggerInterface $logger)
    {
        $this->___init();
        parent::__construct($storeManager, $currencyFactory, $logger);
    }

    /**
     * {@inheritdoc}
     */
    public function convert($amount, $scope = null, $currency = null)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'convert');
        if (!$pluginInfo) {
            return parent::convert($amount, $scope, $currency);
        } else {
            return $this->___callPlugins('convert', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function convertAndRound($amount, $scope = null, $currency = null, $precision = 2)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'convertAndRound');
        if (!$pluginInfo) {
            return parent::convertAndRound($amount, $scope, $currency, $precision);
        } else {
            return $this->___callPlugins('convertAndRound', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function format($amount, $includeContainer = true, $precision = 2, $scope = null, $currency = null)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'format');
        if (!$pluginInfo) {
            return parent::format($amount, $includeContainer, $precision, $scope, $currency);
        } else {
            return $this->___callPlugins('format', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function convertAndFormat($amount, $includeContainer = true, $precision = 2, $scope = null, $currency = null)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'convertAndFormat');
        if (!$pluginInfo) {
            return parent::convertAndFormat($amount, $includeContainer, $precision, $scope, $currency);
        } else {
            return $this->___callPlugins('convertAndFormat', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function getCurrency($scope = null, $currency = null)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getCurrency');
        if (!$pluginInfo) {
            return parent::getCurrency($scope, $currency);
        } else {
            return $this->___callPlugins('getCurrency', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function getCurrencySymbol($scope = null, $currency = null)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getCurrencySymbol');
        if (!$pluginInfo) {
            return parent::getCurrencySymbol($scope, $currency);
        } else {
            return $this->___callPlugins('getCurrencySymbol', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function round($price)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'round');
        if (!$pluginInfo) {
            return parent::round($price);
        } else {
            return $this->___callPlugins('round', func_get_args(), $pluginInfo);
        }
    }
}
