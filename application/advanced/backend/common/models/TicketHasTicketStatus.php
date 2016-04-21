<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "ticket_has_ticket_status".
 *
 * @property integer $ticket_has_ticket_status_id
 * @property integer $ticket_id
 * @property integer $ticket_status_id
 * @property integer $employee_id
 *
 * @property Employee $employee
 * @property Ticket $ticket
 * @property TicketStatus $ticketStatus
 */
class TicketHasTicketStatus extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'ticket_has_ticket_status';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['ticket_id', 'ticket_status_id', 'employee_id'], 'required'],
            [['ticket_id', 'ticket_status_id', 'employee_id'], 'integer']
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'ticket_has_ticket_status_id' => 'Ticket Has Ticket Status ID',
            'ticket_id' => 'Ticket ID',
            'ticket_status_id' => 'Ticket Status ID',
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
    public function getTicket()
    {
        return $this->hasOne(Ticket::className(), ['ticket_id' => 'ticket_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getTicketStatus()
    {
        return $this->hasOne(TicketStatus::className(), ['ticket_status_id' => 'ticket_status_id']);
    }
}
