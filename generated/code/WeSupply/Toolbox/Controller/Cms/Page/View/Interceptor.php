<?php
namespace WeSupply\Toolbox\Controller\Cms\Page\View;

/**
 * Interceptor class for @see \WeSupply\Toolbox\Controller\Cms\Page\View
 */
class Interceptor extends \WeSupply\Toolbox\Controller\Cms\Page\View implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Framework\App\Action\Context $context, \Magento\Framework\App\RequestInterface $request, \Magento\Cms\Helper\Page $pageHelper, \Magento\Framework\Controller\Result\ForwardFactory $resultForwardFactory, \Magento\Cms\Model\Page $page, \WeSupply\Toolbox\Helper\Data $wsHelper)
    {
        $this->___init();
        parent::__construct($context, $request, $pageHelper, $resultForwardFactory, $page, $wsHelper);
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
