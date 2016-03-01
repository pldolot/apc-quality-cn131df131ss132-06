<?php

namespace app\modules\users\models;

use Yii;

/**
 * This is the model class for table "position".
 *
 * @property integer $position_id
 * @property integer $position
 * @property string $position_name
 *
 * @property Employee[] $employees
 */
class Position extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'position';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['position', 'position_name'], 'required'],
            [['position'], 'integer'],
            [['position_name'], 'string', 'max' => 45],
            [['position'], 'unique']
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'position_id' => 'Position ID',
            'position' => 'Position',
            'position_name' => 'Position Name',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getEmployees()
    {
        return $this->hasMany(Employee::className(), ['position_id' => 'position_id']);
    }
}
