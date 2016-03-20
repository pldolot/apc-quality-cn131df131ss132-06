<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "case_has_case_status".
 *
 * @property integer $case_case_id
 * @property integer $case_status_case_status_id
 * @property string $case_date_time
 * @property integer $employee_employee_id
 *
 * @property SccCase $caseCase
 * @property CaseStatus $caseStatusCaseStatus
 * @property Employee $employeeEmployee
 */
class CaseHasCaseStatus extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'case_has_case_status';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['case_case_id', 'case_status_case_status_id', 'employee_employee_id'], 'required'],
            [['case_case_id', 'case_status_case_status_id', 'employee_employee_id'], 'integer'],
            [['case_date_time'], 'safe']
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'case_case_id' => 'Case Case ID',
            'case_status_case_status_id' => 'Case Status Case Status ID',
            'case_date_time' => 'Case Date Time',
            'employee_employee_id' => 'Employee Employee ID',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getCaseCase()
    {
        return $this->hasOne(SccCase::className(), ['case_id' => 'case_case_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getCaseStatusCaseStatus()
    {
        return $this->hasOne(CaseStatus::className(), ['case_status_id' => 'case_status_case_status_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getEmployeeEmployee()
    {
        return $this->hasOne(Employee::className(), ['employee_id' => 'employee_employee_id']);
    }
}
