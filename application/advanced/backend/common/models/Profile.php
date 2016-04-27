<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "profile".
 *
 * @property integer $profile_id
 * @property string $profilenumber
 * @property string $phonenumber
 * @property string $profile_firstname
 * @property string $profile_middlename
 * @property string $profile_lastname
 * @property string $profile_picture
 * @property string $gsis
 * @property string $sss
 * @property integer $precinct_id
 * @property integer $type_id
 * @property integer $employee_id
 * @property string $mothers_maiden_name
 * @property string $sex
 *
 * @property Employee $employee
 * @property Precinct $precinct
 * @property Type $type
 * @property SccCase[] $sccCases
 */
class Profile extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public $file;

    public static function tableName()
    {
        return 'profile';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['profilenumber', 'phonenumber', 'type_id', 'employee_id', 'mothers_maiden_name', 'sex'], 'required'],
            [['precinct_id', 'type_id', 'employee_id'], 'integer'],
            [['sex'], 'string'],
            [['profilenumber', 'profile_firstname', 'profile_middlename', 'profile_lastname', 'gsis', 'sss', 'mothers_maiden_name'], 'string', 'max' => 45],
            [['phonenumber'], 'string', 'max' => 15],
            [['file'],'file'],
            [['profile_picture'], 'string', 'max' => 100],
            [['profilenumber'], 'unique'],
            [['phonenumber'], 'unique'],
            [['gsis'], 'unique'],
            [['sss'], 'unique'],
            
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'profile_id' => 'Profile ID',
            'profilenumber' => 'Profile Number',
            'phonenumber' => 'Phonenumber',
            'profile_firstname' => 'Firstname',
            'profile_middlename' => 'Middlename',
            'profile_lastname' => 'Lastname',
            'profile_picture'=> 'profile_picture',
            'gsis' => 'GSIS',
            'sss' => 'SSS',
            'precinct_id' => 'Precinct Number',
            'type_id' => 'Position',
            'employee_id' => 'Employee ID',
            'mothers_maiden_name' => 'Mothers Maiden Name',
            'sex' => 'Sex',
            'file'=> 'Profile Picture',

        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getEmployee()
    {
        return $this->hasOne(Employee::className(), ['employee_id' => 'employee_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getPrecinct()
    {
        return $this->hasOne(Precinct::className(), ['precinct_id' => 'precinct_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getType()
    {
        return $this->hasOne(Type::className(), ['type_id' => 'type_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getSccCases()
    {
        return $this->hasMany(SccCase::className(), ['profile_id' => 'profile_id']);
    }
}
