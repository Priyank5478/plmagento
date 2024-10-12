<?php
namespace Magento\Variable\Model\Source\Variables;

/**
 * Interceptor class for @see \Magento\Variable\Model\Source\Variables
 */
class Interceptor extends \Magento\Variable\Model\Source\Variables implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Config\Model\Config\Structure\SearchInterface $configStructure, \Magento\Variable\Model\Config\Structure\AvailableVariables $configPaths)
    {
        $this->___init();
        parent::__construct($configStructure, $configPaths);
    }

    /**
     * {@inheritdoc}
     */
    public function getData()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getData');
        return $pluginInfo ? $this->___callPlugins('getData', func_get_args(), $pluginInfo) : parent::getData();
    }
}
