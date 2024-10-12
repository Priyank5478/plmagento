<?php
namespace MyRacehorse\Admgrid\Model\ResourceModel\Ticket;

use Magento\Framework\Model\ResourceModel\Db\Collection\AbstractCollection;

class Collection extends AbstractCollection
{
    protected function _construct()
    {
        $this->_init('MyRacehorse\Admgrid\Model\Ticket', 'MyRacehorse\Admgrid\Model\ResourceModel\Ticket');
    }
}

