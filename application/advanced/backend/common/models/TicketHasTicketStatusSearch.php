<?php

namespace common\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use common\models\TicketHasTicketStatus;

/**
 * TicketHasTicketStatusSearch represents the model behind the search form about `common\models\TicketHasTicketStatus`.
 */
class TicketHasTicketStatusSearch extends TicketHasTicketStatus
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['ticket_has_ticket_status_id', 'ticket_id', 'ticket_status_id', 'employee_id'], 'integer'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function scenarios()
    {
        // bypass scenarios() implementation in the parent class
        return Model::scenarios();
    }

    /**
     * Creates data provider instance with search query applied
     *
     * @param array $params
     *
     * @return ActiveDataProvider
     */
    public function search($params)
    {
        $query = TicketHasTicketStatus::find();

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);

        $this->load($params);

        if (!$this->validate()) {
            // uncomment the following line if you do not want to return any records when validation fails
            // $query->where('0=1');
            return $dataProvider;
        }

        $query->andFilterWhere([
            'ticket_has_ticket_status_id' => $this->ticket_has_ticket_status_id,
            'ticket_id' => $this->ticket_id,
            'ticket_status_id' => $this->ticket_status_id,
            'employee_id' => $this->employee_id,
        ]);

        return $dataProvider;
    }
}
