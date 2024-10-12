<?php
namespace WeSupply\Toolbox\Controller\Order\Fetch;

/**
 * Interceptor class for @see \WeSupply\Toolbox\Controller\Order\Fetch
 */
class Interceptor extends \WeSupply\Toolbox\Controller\Order\Fetch implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Framework\App\Action\Context $context, \WeSupply\Toolbox\Helper\Data $helper, \WeSupply\Toolbox\Api\OrderRepositoryInterface $orderRepository, \Magento\Store\Model\StoreManagerInterface $storeManager, \WeSupply\Toolbox\Model\ResourceModel\Order\Collection $wsOrderCollection)
    {
        $this->___init();
        parent::__construct($context, $helper, $orderRepository, $storeManager, $wsOrderCollection);
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
