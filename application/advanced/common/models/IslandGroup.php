<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "island_group".
 *
 * @property integer $island_id
 * @property string $island_name
 *
 * @property Region[] $regions
 */
class IslandGroup extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'island_group';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['island_name'], 'required'],
            [['island_name'], 'string', 'max' => 45]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'island_id' => 'Island ID',
            'island_name' => 'Island Name',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getRegions()
    {
        return $this->hasMany(Region::className(), ['island_id' => 'island_id']);
    }
}
