<?php

namespace common\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use common\models\TicketStatus;

/**
 * TicketStatusSearch represents the model behind the search form about `common\models\TicketStatus`.
 */
class TicketStatusSearch extends TicketStatus
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['ticket_status_id', 'tstatus'], 'integer'],
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
        $query = TicketStatus::find();

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
            'ticket_status_id' => $this->ticket_status_id,
            'tstatus' => $this->tstatus,
        ]);

        return $dataProvider;
    }
}
