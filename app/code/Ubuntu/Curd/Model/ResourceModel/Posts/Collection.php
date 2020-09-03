<?php
namespace Ubuntu\Curd\Model\ResourceModel\Posts;

use Magento\Framework\Model\ResourceModel\Db\Collection\AbstractCollection;
 
class Collection extends AbstractCollection
{
    protected function _construct()
    {
        $this->_init(
            'Ubuntu\Curd\Model\Posts',
            'Ubuntu\Curd\Model\ResourceModel\Posts'
        );
    }
}