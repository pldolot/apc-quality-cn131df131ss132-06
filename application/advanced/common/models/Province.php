<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "province".
 *
 * @property integer $province_id
 * @property string $province_name
 * @property integer $region_id
 *
 * @property MunicipalCity[] $municipalCities
 * @property Region $region
 */
class Province extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'province';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['region_id'], 'required'],
            [['region_id'], 'integer'],
            [['province_name'], 'string', 'max' => 100]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'province_id' => 'Province ID',
            'province_name' => 'Province Name',
            'region_id' => 'Region ID',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getMunicipalCities()
    {
        return $this->hasMany(MunicipalCity::className(), ['province_id' => 'province_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getRegion()
    {
        return $this->hasOne(Region::className(), ['region_id' => 'region_id']);
    }
}
