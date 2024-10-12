<?php
namespace WeSupply\Toolbox\Controller\Webhook\Returns;

/**
 * Interceptor class for @see \WeSupply\Toolbox\Controller\Webhook\Returns
 */
class Interceptor extends \WeSupply\Toolbox\Controller\Webhook\Returns implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Framework\App\Action\Context $context, \Magento\Framework\App\ProductMetadataInterface $productMetadata, \Magento\Framework\Controller\Result\JsonFactory $jsonFactory, \Magento\Framework\Serialize\Serializer\Json $json, \Magento\Sales\Model\OrderRepository $orderRepository, \Magento\Framework\Api\SearchCriteriaBuilder $searchCriteriaBuilder, \Magento\Sales\Model\Order\Invoice $invoice, \Magento\Sales\Controller\Adminhtml\Order\CreditmemoLoader $creditMemoLoader, \Magento\Sales\Api\CreditmemoManagementInterface $creditMemoManagement, \Magento\Sales\Model\Order\Email\Sender\CreditmemoSender $creditMemoSender, \Magento\Store\Model\StoreManagerInterface $storeManager, \Magento\Framework\Stdlib\DateTime\DateTimeFactory $dateTimeFactory, \WeSupply\Toolbox\Api\GiftcardInterface $giftCardInterface, \Magento\Framework\Message\ManagerInterface $messageManager, \WeSupply\Toolbox\Api\WeSupplyApiInterface $weSupplyApiInterface, \Magento\Framework\Pricing\Helper\Data $priceHelper, \WeSupply\Toolbox\Helper\Data $helper, \WeSupply\Toolbox\Logger\Logger $logger, \WeSupply\Toolbox\Model\Webhook $webhook, \WeSupply\Toolbox\Model\ReturnsRepository $wsReturnsRepository)
    {
        $this->___init();
        parent::__construct($context, $productMetadata, $jsonFactory, $json, $orderRepository, $searchCriteriaBuilder, $invoice, $creditMemoLoader, $creditMemoManagement, $creditMemoSender, $storeManager, $dateTimeFactory, $giftCardInterface, $messageManager, $weSupplyApiInterface, $priceHelper, $helper, $logger, $webhook, $wsReturnsRepository);
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
