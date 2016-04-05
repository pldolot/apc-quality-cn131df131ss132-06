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
 * @property string $mothers_maiden_name
 * @property string $profile_lastname
 * @property resource $profile_picture
 * @property string $gsis
 * @property string $sss
 * @property string $fingerprintid
 * @property string $esignature
 * @property integer $precinct_id
 * @property integer $type_id
 * @property integer $employee_id
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
            [['profilenumber', 'phonenumber', 'mothers_maiden_name', 'type_id', 'employee_id'], 'required'],
            [['profile_picture'], 'string'],
            [['precinct_id', 'type_id', 'employee_id'], 'integer'],
            [['profilenumber', 'profile_firstname', 'profile_middlename', 'mothers_maiden_name', 'profile_lastname', 'gsis', 'sss', 'fingerprintid', 'esignature'], 'string', 'max' => 45],
            [['phonenumber'], 'string', 'max' => 15],
            [['profilenumber'], 'unique'],
            [['phonenumber'], 'unique'],
            [['fingerprintid'], 'unique'],
            [['esignature'], 'unique'],
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
            'profilenumber' => 'Profilenumber',
            'phonenumber' => 'Phonenumber',
            'profile_firstname' => 'Profile Firstname',
            'profile_middlename' => 'Profile Middlename',
            'mothers_maiden_name' => 'Mothers Maiden Name',
            'profile_lastname' => 'Profile Lastname',
            'profile_picture' => 'Profile Picture',
            'gsis' => 'Gsis',
            'sss' => 'Sss',
            'fingerprintid' => 'Fingerprintid',
            'esignature' => 'Esignature',
            'precinct_id' => 'Precinct ID',
            'type_id' => 'Type ID',
            'employee_id' => 'Employee ID',
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
