<?php

namespace common\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use common\models\AuthAssignment;

/**
 * AuthAssignmentSearch represents the model behind the search form about `common\models\AuthAssignment`.
 */
class AuthAssignmentSearch extends AuthAssignment
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['item_name', 'created_at'], 'safe'],
            [['user_id'], 'integer'],
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
        $query = AuthAssignment::find();

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
            'created_at' => $this->created_at,
            'user_id' => $this->user_id,
        ]);

        $query->andFilterWhere(['like', 'item_name', $this->item_name]);

        return $dataProvider;
    }
}
