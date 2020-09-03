<?php
namespace Ubuntu\Curd\Controller\Adminhtml\Posts;
 
use Ubuntu\Curd\Controller\Adminhtml\Posts;
 
class NewAction extends Posts
{
    /**
     * Create new news action
     *
     * @return void
     */
    public function execute()
    {
        $this->_forward('edit');
    }
}