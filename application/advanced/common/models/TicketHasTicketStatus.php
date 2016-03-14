<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "ticket_has_ticket_status".
 *
 * @property integer $ticket_ticket_id
 * @property integer $ticket_status_ticket_status_id
 * @property integer $employee_employee_id
 *
 * @property Employee $employeeEmployee
 * @property Ticket $ticketTicket
 * @property TicketStatus $ticketStatusTicketStatus
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
            [['ticket_ticket_id', 'ticket_status_ticket_status_id', 'employee_employee_id'], 'required'],
            [['ticket_ticket_id', 'ticket_status_ticket_status_id', 'employee_employee_id'], 'integer']
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'ticket_ticket_id' => 'Ticket Ticket ID',
            'ticket_status_ticket_status_id' => 'Ticket Status Ticket Status ID',
            'employee_employee_id' => 'Employee Employee ID',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getEmployeeEmployee()
    {
        return $this->hasOne(Employee::className(), ['employee_id' => 'employee_employee_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getTicketTicket()
    {
        return $this->hasOne(Ticket::className(), ['ticket_id' => 'ticket_ticket_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getTicketStatusTicketStatus()
    {
        return $this->hasOne(TicketStatus::className(), ['ticket_status_id' => 'ticket_status_ticket_status_id']);
    }
}
