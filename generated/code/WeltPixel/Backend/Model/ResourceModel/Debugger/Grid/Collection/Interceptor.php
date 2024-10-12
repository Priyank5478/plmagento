<?php
namespace WeltPixel\Backend\Model\ResourceModel\Debugger\Grid\Collection;

/**
 * Interceptor class for @see \WeltPixel\Backend\Model\ResourceModel\Debugger\Grid\Collection
 */
class Interceptor extends \WeltPixel\Backend\Model\ResourceModel\Debugger\Grid\Collection implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Backend\Model\Session $backendSession, \WeltPixel\Backend\Model\Scanner $scanner, \Magento\Framework\DataObjectFactory $dataObjectFactory, \Magento\Framework\Data\Collection\EntityFactoryInterface $entityFactory)
    {
        $this->___init();
        parent::__construct($backendSession, $scanner, $dataObjectFactory, $entityFactory);
    }

    /**
     * {@inheritdoc}
     */
    public function getCurPage($displacement = 0)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getCurPage');
        return $pluginInfo ? $this->___callPlugins('getCurPage', func_get_args(), $pluginInfo) : parent::getCurPage($displacement);
    }
}
