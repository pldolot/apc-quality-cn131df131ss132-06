<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "scc_case".
 *
 * @property integer $case_id
 * @property string $casenumber
 * @property string $c_date_time
 * @property integer $profile_id
 *
 * @property CaseHasCaseStatus[] $caseHasCaseStatuses
 * @property Profile $profile
 * @property Ticket[] $tickets
 */
class SccCase extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'scc_case';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['casenumber', 'c_date_time', 'profile_id'], 'required'],
            [['c_date_time'], 'safe'],
            [['profile_id'], 'integer'],
            [['casenumber'], 'string', 'max' => 45],
            [['casenumber'], 'unique']
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'case_id' => 'Case ID',
            'casenumber' => 'Casenumber',
            'c_date_time' => 'C Date Time',
            'profile_id' => 'Profile ID',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getCaseHasCaseStatuses()
    {
        return $this->hasMany(CaseHasCaseStatus::className(), ['case_id' => 'case_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getProfile()
    {
        return $this->hasOne(Profile::className(), ['profile_id' => 'profile_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getTickets()
    {
        return $this->hasMany(Ticket::className(), ['case_id' => 'case_id']);
    }
}
