<?php

namespace common\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use common\models\IslandGroup;

/**
 * IslandGroupSearch represents the model behind the search form about `common\models\IslandGroup`.
 */
class IslandGroupSearch extends IslandGroup
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['island_id'], 'integer'],
            [['island_name'], 'safe'],
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
        $query = IslandGroup::find();

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
            'island_id' => $this->island_id,
        ]);

        $query->andFilterWhere(['like', 'island_name', $this->island_name]);

        return $dataProvider;
    }
}
