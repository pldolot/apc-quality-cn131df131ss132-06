<?php

namespace common\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use common\models\District;

/**
 * DistrictSearch represents the model behind the search form about `common\models\District`.
 */
class DistrictSearch extends District
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['district_id', 'municipality_id'], 'integer'],
            [['district_name'], 'safe'],
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
        $query = District::find();

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
            'district_id' => $this->district_id,
            'municipality_id' => $this->municipality_id,
        ]);

        $query->andFilterWhere(['like', 'district_name', $this->district_name]);

        return $dataProvider;
    }
}
