<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "auth_assignment".
 *
 * @property string $item_name
 * @property string $created_at
 * @property integer $user_id
 *
 * @property AuthItem $itemName
 */
class AuthAssignment extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'auth_assignment';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['item_name', 'user_id'], 'required'],
            [['created_at'], 'safe'],
            [['user_id'], 'integer'],
            [['item_name'], 'string', 'max' => 64]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'item_name' => 'Item Name',
            'created_at' => 'Created At',
            'user_id' => 'User ID',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getItemName()
    {
        return $this->hasOne(AuthItem::className(), ['name' => 'item_name']);
    }
}
