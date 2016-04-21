<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "district".
 *
 * @property integer $district_id
 * @property string $district_name
 * @property integer $municipality_id
 *
 * @property Barangay[] $barangays
 * @property MunicipalCity $municipality
 */
class District extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'district';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['municipality_id'], 'required'],
            [['municipality_id'], 'integer'],
            [['district_name'], 'string', 'max' => 100]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'district_id' => 'District ID',
            'district_name' => 'District Name',
            'municipality_id' => 'Municipality ID',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getBarangays()
    {
        return $this->hasMany(Barangay::className(), ['district_id' => 'district_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getMunicipality()
    {
        return $this->hasOne(MunicipalCity::className(), ['municipality_id' => 'municipality_id']);
    }
}
