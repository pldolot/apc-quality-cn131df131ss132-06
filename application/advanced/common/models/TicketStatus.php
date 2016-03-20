<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "ticket_status".
 *
 * @property integer $ticket_status_id
 * @property integer $tstatus
 *
 * @property TicketHasTicketStatus[] $ticketHasTicketStatuses
 */
class TicketStatus extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'ticket_status';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['tstatus'], 'required'],
            [['tstatus'], 'integer']
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'ticket_status_id' => 'Ticket Status ID',
            'tstatus' => 'Tstatus',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getTicketHasTicketStatuses()
    {
        return $this->hasMany(TicketHasTicketStatus::className(), ['ticket_status_ticket_status_id' => 'ticket_status_id']);
    }
}
