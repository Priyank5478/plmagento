<?php
namespace Mrh\Graph\Model\Resolver;

use Magento\Framework\GraphQl\Config\Element\Field;
use Magento\Framework\GraphQl\Query\ResolverInterface;
use Magento\Framework\GraphQl\Schema\Type\ResolveInfo;
use Magento\Framework\GraphQl\Exception\GraphQlInputException;

class Testdata implements ResolverInterface {

    public function resolve(
        Field $field,
        $context,
        ResolveInfo $info,
        array $value = null,
        array $args = null) {

        $writer = new \Zend_Log_Writer_Stream(BP . '/var/log/custom.log');
        $logger = new \Zend_Log();
        $logger->addWriter($writer);
        $logger->info('text message');

        if (isset($args['id'])) {
            return [
                'id' => $args['id'],
                'name' => $args['name']
            ];
        } else {
            throw new GraphQlInputException(__('Invalid parameter list.'));
        }
    }
}
