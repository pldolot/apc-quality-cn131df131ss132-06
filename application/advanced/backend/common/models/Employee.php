<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "employee".
 *
 * @property integer $employee_id
 * @property string $id_number
 * @property string $firstname
 * @property string $lastname
 * @property string $middlename
 * @property integer $position_id
 * @property integer $user_id


 * @property string $sex


 * @property string $employee_status
 *
 * @property CaseHasCaseStatus[] $caseHasCaseStatuses
 * @property Position $position
 * @property Profile[] $profiles
 * @property TicketHasTicketStatus[] $ticketHasTicketStatuses
 */
class Employee extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'employee';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [

            [['id_number', 'position_id', 'sex', 'user_id', 'employee_status'], 'required'],


            [['position_id', 'user_id'], 'integer'],
            [['sex', 'employee_status'], 'string'],
            [['id_number'], 'string', 'max' => 15],
            [['firstname', 'lastname', 'middlename'], 'string', 'max' => 45],
            [['id_number'], 'unique']
     

];
}
    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'employee_id' => 'Employee ID',
            'id_number' => 'Id Number',
            'firstname' => 'First Name',
            'lastname' => 'Last Name',
            'middlename' => 'Middle Name',
             'sex' => 'Sex',
            'position_id' => 'Position ',
            'user_id' => 'User ID',
            'employee_status' => 'Status',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getCaseHasCaseStatuses()
    {
        return $this->hasMany(CaseHasCaseStatus::className(), ['employee_id' => 'employee_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getPosition()
    {
        return $this->hasOne(Position::className(), ['position_id' => 'position_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getProfiles()
    {
        return $this->hasMany(Profile::className(), ['employee_id' => 'employee_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getTicketHasTicketStatuses()
    {
        return $this->hasMany(TicketHasTicketStatus::className(), ['employee_id' => 'employee_id']);
    }
}
