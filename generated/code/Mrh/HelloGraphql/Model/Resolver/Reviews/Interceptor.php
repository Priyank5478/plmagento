<?php
namespace Mrh\HelloGraphql\Model\Resolver\Reviews;

/**
 * Interceptor class for @see \Mrh\HelloGraphql\Model\Resolver\Reviews
 */
class Interceptor extends \Mrh\HelloGraphql\Model\Resolver\Reviews implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Store\Model\StoreManagerInterface $storeManager, \Magento\Review\Model\ResourceModel\Review\CollectionFactory $reviewCollection)
    {
        $this->___init();
        parent::__construct($storeManager, $reviewCollection);
    }

    /**
     * {@inheritdoc}
     */
    public function resolve(\Magento\Framework\GraphQl\Config\Element\Field $field, $context, \Magento\Framework\GraphQl\Schema\Type\ResolveInfo $info, ?array $value = null, ?array $args = null)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'resolve');
        return $pluginInfo ? $this->___callPlugins('resolve', func_get_args(), $pluginInfo) : parent::resolve($field, $context, $info, $value, $args);
    }
}
