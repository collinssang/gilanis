<?php
namespace Jmango360\Japi\Model\Data\Catalog\Product\Review;

/**
 * Factory class for @see \Jmango360\Japi\Model\Data\Catalog\Product\Review\Overview
 */
class OverviewFactory
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
    public function __construct(\Magento\Framework\ObjectManagerInterface $objectManager, $instanceName = '\\Jmango360\\Japi\\Model\\Data\\Catalog\\Product\\Review\\Overview')
    {
        $this->_objectManager = $objectManager;
        $this->_instanceName = $instanceName;
    }

    /**
     * Create class instance with specified parameters
     *
     * @param array $data
     * @return \Jmango360\Japi\Model\Data\Catalog\Product\Review\Overview
     */
    public function create(array $data = [])
    {
        return $this->_objectManager->create($this->_instanceName, $data);
    }
}
