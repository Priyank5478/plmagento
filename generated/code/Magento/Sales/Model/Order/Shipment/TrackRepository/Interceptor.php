<?php
namespace Magento\Sales\Model\Order\Shipment\TrackRepository;

/**
 * Interceptor class for @see \Magento\Sales\Model\Order\Shipment\TrackRepository
 */
class Interceptor extends \Magento\Sales\Model\Order\Shipment\TrackRepository implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Sales\Model\Spi\ShipmentTrackResourceInterface $trackResource, \Magento\Sales\Api\Data\ShipmentTrackInterfaceFactory $trackFactory, \Magento\Sales\Api\Data\ShipmentTrackSearchResultInterfaceFactory $searchResultFactory, \Magento\Framework\Api\SearchCriteria\CollectionProcessorInterface $collectionProcessor, ?\Magento\Sales\Model\ResourceModel\Order\Shipment\CollectionFactory $shipmentCollection = null, ?\Psr\Log\LoggerInterface $logger = null)
    {
        $this->___init();
        parent::__construct($trackResource, $trackFactory, $searchResultFactory, $collectionProcessor, $shipmentCollection, $logger);
    }

    /**
     * {@inheritdoc}
     */
    public function delete(\Magento\Sales\Api\Data\ShipmentTrackInterface $entity)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'delete');
        return $pluginInfo ? $this->___callPlugins('delete', func_get_args(), $pluginInfo) : parent::delete($entity);
    }

    /**
     * {@inheritdoc}
     */
    public function save(\Magento\Sales\Api\Data\ShipmentTrackInterface $entity)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'save');
        return $pluginInfo ? $this->___callPlugins('save', func_get_args(), $pluginInfo) : parent::save($entity);
    }
}
