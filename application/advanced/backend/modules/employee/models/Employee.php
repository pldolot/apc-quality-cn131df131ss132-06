<?php

namespace backend\modules\employee\models;

use Yii;

/**
 * This is the model class for table "employee".
 *
 * @property integer $id
 * @property string $idnumber
 * @property string $firstname
 * @property string $lastname
 * @property string $middlename
 * @property integer $position_id
 *
 * @property Case[] $cases
 * @property Position $position
 * @property Profile[] $profiles
 * @property Ticket[] $tickets
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
            [['position_id'], 'required'],
            [['position_id'], 'integer'],
            [['idnumber'], 'string', 'max' => 15],
            [['firstname', 'lastname', 'middlename'], 'string', 'max' => 45],
            [['idnumber'], 'unique']
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'idnumber' => 'Idnumber',
            'firstname' => 'Firstname',
            'lastname' => 'Lastname',
            'middlename' => 'Middlename',
            'position_id' => 'Position ID',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getCases()
    {
        return $this->hasMany(Case::className(), ['employee_id' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getPosition()
    {
        return $this->hasOne(Position::className(), ['id' => 'position_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getProfiles()
    {
        return $this->hasMany(Profile::className(), ['employee_id' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getTickets()
    {
        return $this->hasMany(Ticket::className(), ['employee_id' => 'id']);
    }
}
