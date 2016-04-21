<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "ticket".
 *
 * @property integer $ticket_id
 * @property string $ticketnumber
 * @property string $t_date_time
 * @property integer $case_id
 * @property string $ticket_note
 * @property string $ticket_name
 *
 * @property SccCase $case
 * @property TicketHasTicketStatus[] $ticketHasTicketStatuses
 */
class Ticket extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'ticket';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['ticketnumber', 't_date_time', 'case_id', 'ticket_name'], 'required'],
            [['t_date_time'], 'safe'],
            [['case_id'], 'integer'],
            [['ticket_note'], 'string'],
            [['ticketnumber', 'ticket_name'], 'string', 'max' => 45],
            [['ticketnumber'], 'unique']
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'ticket_id' => 'Ticket ID',
            'ticketnumber' => 'Ticketnumber',
            't_date_time' => 'T Date Time',
            'case_id' => 'Case ID',
            'ticket_note' => 'Ticket Note',
            'ticket_name' => 'Ticket Name',
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
    public function getTicketHasTicketStatuses()
    {
        return $this->hasMany(TicketHasTicketStatus::className(), ['ticket_id' => 'ticket_id']);
    }
}
