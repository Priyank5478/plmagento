<?php
namespace WeSupply\Toolbox\Controller\Webhook\Pickup;

/**
 * Interceptor class for @see \WeSupply\Toolbox\Controller\Webhook\Pickup
 */
class Interceptor extends \WeSupply\Toolbox\Controller\Webhook\Pickup implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Framework\App\Action\Context $context, \Magento\Framework\Controller\Result\JsonFactory $jsonFactory, \Magento\Framework\Serialize\Serializer\Json $jsonSerializer, \WeSupply\Toolbox\Model\Webhook $webhook, \WeSupply\Toolbox\Logger\Logger $logger, \Magento\Sales\Api\OrderRepositoryInterface $orderRepository, \Magento\Sales\Model\Convert\Order $convertOrder, \Magento\Shipping\Model\ShipmentNotifier $shipmentNotifier, \Magento\Sales\Model\Service\InvoiceService $invoiceService, \Magento\Framework\App\Config\ScopeConfigInterface $scopeConfig)
    {
        $this->___init();
        parent::__construct($context, $jsonFactory, $jsonSerializer, $webhook, $logger, $orderRepository, $convertOrder, $shipmentNotifier, $invoiceService, $scopeConfig);
    }

    /**
     * {@inheritdoc}
     */
    public function execute()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'execute');
        return $pluginInfo ? $this->___callPlugins('execute', func_get_args(), $pluginInfo) : parent::execute();
    }

    /**
     * {@inheritdoc}
     */
    public function dispatch(\Magento\Framework\App\RequestInterface $request)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'dispatch');
        return $pluginInfo ? $this->___callPlugins('dispatch', func_get_args(), $pluginInfo) : parent::dispatch($request);
    }
}
