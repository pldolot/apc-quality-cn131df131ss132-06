<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "case_has_case_status".
 *
 * @property integer $case_has_case_status
 * @property integer $case_id
 * @property integer $case_status_id
 * @property string $case_date_time
 * @property integer $employee_id
 *
 * @property SccCase $case
 * @property CaseStatus $caseStatus
 * @property Employee $employee
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
            [['case_id', 'case_status_id', 'employee_id'], 'required'],
            [['case_id', 'case_status_id', 'employee_id'], 'integer'],
            [['case_date_time'], 'safe']
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'case_has_case_status' => 'Case Has Case Status',
            'case_id' => 'Case ID',
            'case_status_id' => 'Case Status ID',
            'case_date_time' => 'Case Date Time',
            'employee_id' => 'Employee ID',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getCase()
    {
        return $this->hasOne(SccCase::className(), ['case_id' => 'case_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getCaseStatus()
    {
        return $this->hasOne(CaseStatus::className(), ['case_status_id' => 'case_status_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getEmployee()
    {
        return $this->hasOne(Employee::className(), ['employee_id' => 'employee_id']);
    }
}
