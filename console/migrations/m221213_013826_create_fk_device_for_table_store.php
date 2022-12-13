<?php

use yii\db\Migration;

/**
 * Class m221213_013826_create_fk_device_for_table_store
 */
class m221213_013826_create_fk_device_for_table_store extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        // creates index for column `store_id`
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
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
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
    }
}
