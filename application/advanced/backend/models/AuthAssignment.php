<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "auth_assignment".
 *
 * @property integer $assignment_id
 * @property string $created_at
 * @property string $item_name
 * @property integer $item_id
 * @property integer $user_id
 *
 * @property AuthItem $item
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
            [['created_at'], 'safe'],
            [['item_id', 'user_id'], 'required'],
            [['item_id', 'user_id'], 'integer'],
            [['item_name'], 'string', 'max' => 45]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'assignment_id' => 'Assignment ID',
            'created_at' => 'Created At',
            'item_name' => 'Item Name',
            'item_id' => 'Item ID',
            'user_id' => 'User ID',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getItem()
    {
        return $this->hasOne(AuthItem::className(), ['item_id' => 'item_id']);
    }
}
