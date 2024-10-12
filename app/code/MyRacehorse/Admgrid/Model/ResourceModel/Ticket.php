<?php
namespace MyRacehorse\Admgrid\Model\ResourceModel;

use Magento\Framework\Model\ResourceModel\Db\AbstractDb;

class Ticket extends AbstractDb
{
    protected function _construct()
    {
        $this->_init('magenest_ticket_ticket', 'ticket_id');
    }
}

