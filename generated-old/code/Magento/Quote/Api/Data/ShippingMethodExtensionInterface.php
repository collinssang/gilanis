<?php
namespace Magento\Quote\Api\Data;

/**
 * ExtensionInterface class for @see \Magento\Quote\Api\Data\ShippingMethodInterface
 */
interface ShippingMethodExtensionInterface extends \Magento\Framework\Api\ExtensionAttributesInterface
{
    /**
     * @return string|null
     */
    public function getTooltip();

    /**
     * @param string $tooltip
     * @return $this
     */
    public function setTooltip($tooltip);

    /**
     * @return string|null
     */
    public function getCustomDuties();

    /**
     * @param string $customDuties
     * @return $this
     */
    public function setCustomDuties($customDuties);

    /**
     * @return string|null
     */
    public function getHideNotifications();

    /**
     * @param string $hideNotifications
     * @return $this
     */
    public function setHideNotifications($hideNotifications);
}
