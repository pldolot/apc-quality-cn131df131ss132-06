<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "municipal_city".
 *
 * @property integer $municipality_id
 * @property string $municipality_name
 * @property integer $province_id
 *
 * @property District[] $districts
 * @property Province $province
 */
class MunicipalCity extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'municipal_city';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['province_id'], 'required'],
            [['province_id'], 'integer'],
            [['municipality_name'], 'string', 'max' => 100]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'municipality_id' => 'Municipality ID',
            'municipality_name' => 'Municipality Name',
            'province_id' => 'Province ID',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getDistricts()
    {
        return $this->hasMany(District::className(), ['municipality_id' => 'municipality_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getProvince()
    {
        return $this->hasOne(Province::className(), ['province_id' => 'province_id']);
    }
}
