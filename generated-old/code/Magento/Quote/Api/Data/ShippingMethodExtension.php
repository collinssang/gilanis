<?php
namespace Magento\Quote\Api\Data;

/**
 * Extension class for @see \Magento\Quote\Api\Data\ShippingMethodInterface
 */
class ShippingMethodExtension extends \Magento\Framework\Api\AbstractSimpleObject implements ShippingMethodExtensionInterface
{
    /**
     * @return string|null
     */
    public function getTooltip()
    {
        return $this->_get('tooltip');
    }

    /**
     * @param string $tooltip
     * @return $this
     */
    public function setTooltip($tooltip)
    {
        $this->setData('tooltip', $tooltip);
        return $this;
    }

    /**
     * @return string|null
     */
    public function getCustomDuties()
    {
        return $this->_get('custom_duties');
    }

    /**
     * @param string $customDuties
     * @return $this
     */
    public function setCustomDuties($customDuties)
    {
        $this->setData('custom_duties', $customDuties);
        return $this;
    }

    /**
     * @return string|null
     */
    public function getHideNotifications()
    {
        return $this->_get('hide_notifications');
    }

    /**
     * @param string $hideNotifications
     * @return $this
     */
    public function setHideNotifications($hideNotifications)
    {
        $this->setData('hide_notifications', $hideNotifications);
        return $this;
    }
}
