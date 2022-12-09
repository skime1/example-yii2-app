<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%store}}`.
 */
class m221209_232429_create_store_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%store}}', [
            'id' => $this->primaryKey(),
            'title' => $this->string(20)->notNull()->unique(),
            'created_at' => $this->integer(11)->notNull(),
        ]);
        
        
        $this->addForeignKey(
            'fk_device_to_store', 
            'device', 
            'store_id', 
            'store', 
            'id', 
            'SET NULL'
        );
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%store}}');
        $this->dropForeignKey('fk_store_to_device', '{{%device}}');
    }
}
