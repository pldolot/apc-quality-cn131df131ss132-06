<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "school".
 *
 * @property integer $school_id
 * @property string $school_name
 * @property integer $barangay_id
 *
 * @property Precinct[] $precincts
 * @property Barangay $barangay
 */
class School extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'school';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['barangay_id'], 'required'],
            [['barangay_id'], 'integer'],
            [['school_name'], 'string', 'max' => 50]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'school_id' => 'School ID',
            'school_name' => 'School Name',
            'barangay_id' => 'Barangay ID',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getPrecincts()
    {
        return $this->hasMany(Precinct::className(), ['school_id' => 'school_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getBarangay()
    {
        return $this->hasOne(Barangay::className(), ['barangay_id' => 'barangay_id']);
    }
}
