<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "barangay".
 *
 * @property integer $barangay_id
 * @property string $barangay
 * @property integer $district_id
 *
 * @property District $district
 * @property School[] $schools
 */
class Barangay extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'barangay';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['district_id'], 'required'],
            [['district_id'], 'integer'],
            [['barangay'], 'string', 'max' => 100]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'barangay_id' => 'Barangay ID',
            'barangay' => 'Barangay',
            'district_id' => 'District ID',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getDistrict()
    {
        return $this->hasOne(District::className(), ['district_id' => 'district_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getSchools()
    {
        return $this->hasMany(School::className(), ['barangay_id' => 'barangay_id']);
    }
}
