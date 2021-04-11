<?php
namespace Block\Admin\Index;

    \Mage::loadFileByClassName('Block\Core\Template');

    class Index extends \Block\Core\Template
    {
        public function __construct()
        {
            $this->setTemplate('./view/admin/index/index.php');
        }

        public function getCustomers()
        {
            $customer =  \Mage::getModel('Customer');
            return $customer->fetchAll();
        }
    }
    
?>