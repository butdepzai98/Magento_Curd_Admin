<?php
namespace Ubuntu\Curd\Controller\Adminhtml\Posts;

use Ubuntu\Curd\Controller\Adminhtml\Posts;
 
class Grid extends Posts
{
    public function execute()
    {
        return $this->_resultPageFactory->create();
    }
}