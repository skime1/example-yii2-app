<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "device".
 *
 * @property int $id
 * @property string $title
 * @property int|null $store_id
 * @property int $created_at
 *
 * @property Store $store
 */
class Device extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'device';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['title', 'created_at'], 'required'],
            [['store_id', 'created_at'], 'integer'],
            [['title'], 'string', 'max' => 11],
            [['title'], 'unique'],
            [['store_id'], 'exist', 'skipOnError' => true, 'targetClass' => Store::class, 'targetAttribute' => ['store_id' => 'id']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'title' => 'Title',
            'store_id' => 'Store ID',
            'created_at' => 'Created At',
        ];
    }

    /**
     * Gets query for [[Store]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getStore()
    {
        return $this->hasOne(Store::class, ['id' => 'store_id']);
    }
}
