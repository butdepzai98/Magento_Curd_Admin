<?php
namespace Ubuntu\Curd\Model;

use Magento\Framework\Model\AbstractModel;
 
class Posts extends AbstractModel
{
    protected function _construct()
    {
        $this->_init('Ubuntu\Curd\Model\ResourceModel\Posts');
    }
}