<?php
namespace Ubuntu\Curd\Controller\Adminhtml\Posts;
 
use Ubuntu\Curd\Controller\Adminhtml\Posts;
 
class Edit extends Posts
{
    /**
     * @return void
     */
    public function execute()
    {
        $postId = $this->getRequest()->getParam('id');
 
        $model = $this->_postsFactory->create();
 
        if ($postId) {
            $model->load($postId);
            if (!$model->getId()) {
                $this->messageManager->addError(__('This news no longer exists.'));
                $this->_redirect('*/*/');
                return;
            }
        }
 
        // Restore previously entered form data from session
        $data = $this->_session->getNewsData(true);
        if (!empty($data)) {
            $model->setData($data);
        }
        $this->_coreRegistry->register('magetop_blog', $model);
 
        /** @var \Magento\Backend\Model\View\Result\Page $resultPage */
        $resultPage = $this->_resultPageFactory->create();
        $resultPage->setActiveMenu('Ubuntu_Curd::ad_ubuntu_menu');
        $resultPage->getConfig()->getTitle()->prepend(__('Posts'));
 
        return $resultPage;
    }
}