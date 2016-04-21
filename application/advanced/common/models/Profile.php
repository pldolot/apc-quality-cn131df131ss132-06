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
 * @property resource $profile_picture
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
    public $profile_picture;

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
            [['profile_picture', 'sex'], 'string'],
            [['precinct_id', 'type_id', 'employee_id'], 'integer'],
            [['profilenumber', 'profile_firstname', 'profile_middlename', 'profile_lastname', 'gsis', 'sss', 'mothers_maiden_name'], 'string', 'max' => 45],
            [['phonenumber'], 'string', 'max' => 15],
            [['profilenumber'], 'unique'],
            
            [['phonenumber'], 'unique'],
            [['gsis'], 'unique'],
            [['sss'], 'unique']
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
            'profile_picture' => 'Profile Picture',
            'gsis' => 'Gsis',
            'sss' => 'Sss',
            'precinct_id' => 'Precinct Number',
            'type_id' => 'Position',
            'employee_id' => 'Employee Name',
            'mothers_maiden_name' => 'Mothers Maiden Name',
            'sex' => 'Sex',
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
