<?php
/**
 * Copyright © 2016 Magento. All rights reserved.
 * See COPYING.txt for license details.
 */
namespace DirectPayOnline\Plug\Observer;

use Magento\Framework\Event\ObserverInterface;
use Magento\Framework\Event\Observer as EventObserver;

class SaveOrderAfterSubmitObserver implements ObserverInterface
{
    /**
     * Core registry
     *
     * @var \Magento\Framework\Registry
     */
    protected $coreRegistry;

    /**
     * Constructor
     *
     * @param \Magento\Framework\Registry $coreRegistry
     */
    public function __construct(
        \Magento\Framework\Registry $coreRegistry
    ) {
        $this->coreRegistry = $coreRegistry;
    }

    /**
     * Save order into registry to use it in the overloaded controller.
     *
     * @param EventObserver $observer
     * @return $this
     */
    public function execute(EventObserver $observer)
    {
        /* @var $order \Magento\Sales\Model\Order */
        $order = $observer->getEvent()->getData('order');
        $this->coreRegistry->register('hss_order', $order, true);

        return $this;
    }
}
