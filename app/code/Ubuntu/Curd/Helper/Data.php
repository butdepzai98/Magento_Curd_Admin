<?php
namespace Ubuntu\Curd\Helper;

use Magento\Framework\App\Helper\AbstractHelper;
use Magento\Framework\App\Helper\Context;
use Magento\TestFramework\Db\AbstractDb;
use Magento\Store\Model\ScopeInterface;

class Data extends AbstractHelper
{
    public function __construct(Context $context)
    {
        parent::__construct($context);
    }

    public function checkDate($date = '')
    {
        $ok = false;
        if($date != '')
        {
            $day = date('w', strtotime($date));
            if($day == 0)
                $ok = true;
        }
        return $ok;
    }

    function getUbuntuSetting($path = '')
    {
        return $this->scopeConfig->getValue($path,ScopeInterface::SCOPE_STORE);
    }
}