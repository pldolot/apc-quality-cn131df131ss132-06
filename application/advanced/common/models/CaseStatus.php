<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "case_status".
 *
 * @property integer $case_status_id
 * @property integer $cstatus
 *
 * @property CaseHasCaseStatus[] $caseHasCaseStatuses
 */
class CaseStatus extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'case_status';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['cstatus'], 'required'],
            [['cstatus'], 'integer']
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'case_status_id' => 'Case Status ID',
            'cstatus' => 'Cstatus',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getCaseHasCaseStatuses()
    {
        return $this->hasMany(CaseHasCaseStatus::className(), ['case_status_case_status_id' => 'case_status_id']);
    }
}
