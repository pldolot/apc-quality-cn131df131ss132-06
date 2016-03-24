<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "precinct".
 *
 * @property integer $precinct_id
 * @property string $precinctnumber
 * @property integer $school_id
 *
 * @property School $school
 * @property Profile[] $profiles
 */
class Precinct extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'precinct';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['school_id'], 'required'],
            [['school_id'], 'integer'],
            [['precinctnumber'], 'string', 'max' => 45]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'precinct_id' => 'Precinct ID',
            'precinctnumber' => 'Precinctnumber',
            'school_id' => 'School ID',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getSchool()
    {
        return $this->hasOne(School::className(), ['school_id' => 'school_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getProfiles()
    {
        return $this->hasMany(Profile::className(), ['precinct_id' => 'precinct_id']);
    }
}
