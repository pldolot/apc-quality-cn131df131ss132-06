<?php

namespace common\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use common\models\Ticket;

/**
 * TicketSearch represents the model behind the search form about `common\models\Ticket`.
 */
class TicketSearch extends Ticket
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['ticket_id', 'case_id'], 'integer'],
            [['ticketnumber', 't_date_time', 'ticket_note', 'ticket_name'], 'safe'],
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
        $query = Ticket::find();

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
            'ticket_id' => $this->ticket_id,
            't_date_time' => $this->t_date_time,
            'case_id' => $this->case_id,
        ]);

        $query->andFilterWhere(['like', 'ticketnumber', $this->ticketnumber])
            ->andFilterWhere(['like', 'ticket_note', $this->ticket_note])
            ->andFilterWhere(['like', 'ticket_name', $this->ticket_name]);

        return $dataProvider;
    }
}
