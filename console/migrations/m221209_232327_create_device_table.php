<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%device}}`.
 */
class m221209_232327_create_device_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%device}}', [
            'id' => $this->primaryKey(),
            'title' => $this->string(11)->notNull()->unique(),
            'store_id' => $this->integer(),
            'created_at' => $this->integer(11)->notNull(),
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%device}}');
    }
}
