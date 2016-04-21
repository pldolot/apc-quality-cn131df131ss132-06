<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "region".
 *
 * @property integer $region_id
 * @property string $region_name
 * @property integer $island_id
 *
 * @property Province[] $provinces
 * @property IslandGroup $island
 */
class Region extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'region';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['region_name', 'island_id'], 'required'],
            [['island_id'], 'integer'],
            [['region_name'], 'string', 'max' => 45]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'region_id' => 'Region ID',
            'region_name' => 'Region Name',
            'island_id' => 'Island ID',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getProvinces()
    {
        return $this->hasMany(Province::className(), ['region_id' => 'region_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getIsland()
    {
        return $this->hasOne(IslandGroup::className(), ['island_id' => 'island_id']);
    }
}
