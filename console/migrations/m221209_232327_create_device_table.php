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

        /*
        $this->createIndex(
            '{{%idx-device-store_id}}',
            '{{%device}}',
            'store_id'
        );

        // add foreign key for table `{{%store}}`
        $this->addForeignKey(
            '{{%fk-device-store_id}}',
            '{{%device}}',
            'store_id',
            '{{%store}}',
            'id',
            'SET NULL'
        );
        */
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%device}}');


        /*
        // drops foreign key for table `{{%store}}`
        $this->dropForeignKey(
            '{{%fk-device-store_id}}',
            '{{%device}}'
        );

        // drops index for column `store_id`
        $this->dropIndex(
            '{{%idx-device-store_id}}',
            '{{%device}}'
        );
        */
    }
}
