<?php
namespace Jmango360\Japi\Model\Data\Catalog\Product\Configurable;

/**
 * Factory class for @see \Jmango360\Japi\Model\Data\Catalog\Product\Configurable\Product
 */
class ProductFactory
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
    public function __construct(\Magento\Framework\ObjectManagerInterface $objectManager, $instanceName = '\\Jmango360\\Japi\\Model\\Data\\Catalog\\Product\\Configurable\\Product')
    {
        $this->_objectManager = $objectManager;
        $this->_instanceName = $instanceName;
    }

    /**
     * Create class instance with specified parameters
     *
     * @param array $data
     * @return \Jmango360\Japi\Model\Data\Catalog\Product\Configurable\Product
     */
    public function create(array $data = [])
    {
        return $this->_objectManager->create($this->_instanceName, $data);
    }
}
