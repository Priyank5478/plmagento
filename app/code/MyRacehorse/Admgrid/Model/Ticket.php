<?php
namespace MyRacehorse\Admgrid\Model;

use Magento\Framework\Model\AbstractModel;

class Ticket extends AbstractModel
{
    protected function _construct()
    {
        $this->_init('MyRacehorse\Admgrid\Model\ResourceModel\Ticket');
    }
}

