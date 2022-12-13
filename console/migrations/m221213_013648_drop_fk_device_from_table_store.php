<?php

use yii\db\Migration;

/**
 * Class m221213_013648_drop_fk_device_from_table_store
 */
class m221213_013648_drop_fk_device_from_table_store extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->dropForeignKey('fk_device_to_store', '{{%device}}');
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->addForeignKey(
            'fk_device_to_store',  
            'device', 
            'store_id', 
            'store', 
            'id', 
            'SET NULL'
        );
    }
}
