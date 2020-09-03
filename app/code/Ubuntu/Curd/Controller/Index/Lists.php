<?php
namespace Ubuntu\Curd\Controller\Index;

use Magento\Framework\App\Action\Action;
use Magento\Framework\App\Action\Context;
use Magento\Framework\View\Result\PageFactory;

class Lists extends Action
{
    protected $_resultPageFactory;

    public function __construct(Context $context, PageFactory $pageFactory)
    {
        parent::__construct($context);
        $this->_resultPageFactory = $pageFactory;
    }

    public function execute()
    {
        $resultPageFactory = $this->_resultPageFactory->create();

        //Add page title
        $resultPageFactory->getConfig()->getTitle()->set(__('Danh sach Posts'));

        //Add breadcrumbs
        if($resultPageFactory->getLayout()->getBlock('breadcrumbs'))
        {
            $breadcrumbs = $resultPageFactory->getLayout()->getBlock('breadcrumbs');

            $breadcrumbs->addCrumb('home',
                [
                    'label' => __('Home'),
                    'title' => __('Home'),
                    'link'  => $this->_url->getUrl('')
                ]
            );
            $breadcrumbs->addCrumb('booking_search',
                [
                    'label' => __('Posts'),
                    'title' => __('Posts')
                ]
            );
        }
        return $resultPageFactory;
    }
}