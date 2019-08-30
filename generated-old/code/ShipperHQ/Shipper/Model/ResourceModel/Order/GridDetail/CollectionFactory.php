<?php
namespace ShipperHQ\Shipper\Model\ResourceModel\Order\GridDetail;

/**
 * Factory class for @see \ShipperHQ\Shipper\Model\ResourceModel\Order\GridDetail\Collection
 */
class CollectionFactory
{
    /**
     * Object Manager instance
     *
     * @var \Magento\Framework\ObjectManagerInterface
     */
    protected $_objectManager = null;

    /**
     * Instance name to create
     *
     * @var string
     */
    protected $_instanceName = null;

    /**
     * Factory constructor
     *
     * @param \Magento\Framework\ObjectManagerInterface $objectManager
     * @param string $instanceName
     */
    public function __construct(\Magento\Framework\ObjectManagerInterface $objectManager, $instanceName = '\\ShipperHQ\\Shipper\\Model\\ResourceModel\\Order\\GridDetail\\Collection')
    {
        $this->_objectManager = $objectManager;
        $this->_instanceName = $instanceName;
    }

    /**
     * Create class instance with specified parameters
     *
     * @param array $data
     * @return \ShipperHQ\Shipper\Model\ResourceModel\Order\GridDetail\Collection
     */
    public function create(array $data = [])
    {
        return $this->_objectManager->create($this->_instanceName, $data);
    }
}
