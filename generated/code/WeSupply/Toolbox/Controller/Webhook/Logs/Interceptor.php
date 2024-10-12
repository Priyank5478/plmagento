<?php
namespace WeSupply\Toolbox\Controller\Webhook\Logs;

/**
 * Interceptor class for @see \WeSupply\Toolbox\Controller\Webhook\Logs
 */
class Interceptor extends \WeSupply\Toolbox\Controller\Webhook\Logs implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Framework\App\Action\Context $context, \WeSupply\Toolbox\Helper\Data $helper, \Magento\Backend\App\Response\Http\FileFactory $fileFactory, \Magento\Framework\Filesystem $file)
    {
        $this->___init();
        parent::__construct($context, $helper, $fileFactory, $file);
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
