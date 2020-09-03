<?php
namespace Ubuntu\Curd\Controller\Index;

use Magento\Framework\App\Action\Context;
use Magento\Framework\View\Result\PageFactory;
use Magento\Framework\App\Action\Action;

class TextEvent extends Action
{
    protected $session;
    protected $resultPageFactory;
 
    public function __construct(
        Context $context,
        PageFactory $resultPageFactory,
        \Magento\Customer\Model\Session $session
    )
    {
        parent::__construct($context);
        $this->resultPageFactory = $resultPageFactory;
        $this->session = $session;
    }


    /**
     * @return \Magento\Framework\App\ResponseInterface|\Magento\Framework\Controller\ResultInterface|void
     */
    public function execute()
    {
        $text = 'Event In Magento ';
        $this->session->setTextMessage($text);
        $this->_eventManager->dispatch('ubuntu_curd_display_text_before', ['ubuntu_message' => $text]);
        echo $this->session->getTextMessage();
    }
}