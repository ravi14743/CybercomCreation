<?php
    
    Mage::loadFileByClassName("Model_Core_Adapter");
    Mage::loadFileByClassName("Model_Core_Table");

    class Model_Shipping extends Model_Core_Table
    {
        const STATUS_ENABLE = 1;
        const STATUS_DISABLE = 0;

        public function __construct()
        {
            $this->setTableName('shipping');
            $this->setPrimaryKey('id');
        }
        
        public function getStatusOption()
        {
            return [
                self::STATUS_ENABLE => "Enable",
                self::STATUS_DISABLE => "Disable"
            ];
        }
    }
    
?>