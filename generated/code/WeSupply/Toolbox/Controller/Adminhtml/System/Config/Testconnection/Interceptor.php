<?php
namespace WeSupply\Toolbox\Controller\Adminhtml\System\Config\Testconnection;

/**
 * Interceptor class for @see \WeSupply\Toolbox\Controller\Adminhtml\System\Config\Testconnection
 */
class Interceptor extends \WeSupply\Toolbox\Controller\Adminhtml\System\Config\Testconnection implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Backend\App\Action\Context $context, \Magento\Framework\Controller\Result\JsonFactory $resultJsonFactory, \WeSupply\Toolbox\Api\WeSupplyApiInterface $weSupplyApi, \WeSupply\Toolbox\Helper\Data $helper)
    {
        $this->___init();
        parent::__construct($context, $resultJsonFactory, $weSupplyApi, $helper);
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
