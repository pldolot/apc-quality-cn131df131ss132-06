<?php

namespace common\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use common\models\MunicipalCity;

/**
 * MunicipalCitySearch represents the model behind the search form about `common\models\MunicipalCity`.
 */
class MunicipalCitySearch extends MunicipalCity
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['municipality_id', 'province_id'], 'integer'],
            [['municipality_name'], 'safe'],
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
        $query = MunicipalCity::find();

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
            'municipality_id' => $this->municipality_id,
            'province_id' => $this->province_id,
        ]);

        $query->andFilterWhere(['like', 'municipality_name', $this->municipality_name]);

        return $dataProvider;
    }
}
