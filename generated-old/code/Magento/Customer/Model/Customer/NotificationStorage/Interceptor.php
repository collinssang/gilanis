<?php
namespace Magento\Customer\Model\Customer\NotificationStorage;

/**
 * Interceptor class for @see \Magento\Customer\Model\Customer\NotificationStorage
 */
class Interceptor extends \Magento\Customer\Model\Customer\NotificationStorage implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Framework\Cache\FrontendInterface $cache, ?\Magento\Framework\Serialize\SerializerInterface $serializer = null)
    {
        $this->___init();
        parent::__construct($cache, $serializer);
    }

    /**
     * {@inheritdoc}
     */
    public function add($notificationType, $customerId)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'add');
        if (!$pluginInfo) {
            return parent::add($notificationType, $customerId);
        } else {
            return $this->___callPlugins('add', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function isExists($notificationType, $customerId)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'isExists');
        if (!$pluginInfo) {
            return parent::isExists($notificationType, $customerId);
        } else {
            return $this->___callPlugins('isExists', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function remove($notificationType, $customerId)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'remove');
        if (!$pluginInfo) {
            return parent::remove($notificationType, $customerId);
        } else {
            return $this->___callPlugins('remove', func_get_args(), $pluginInfo);
        }
    }
}
