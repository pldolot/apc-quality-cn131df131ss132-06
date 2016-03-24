<?php

namespace common\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use common\models\Precinct;

/**
 * PrecinctSearch represents the model behind the search form about `common\models\Precinct`.
 */
class PrecinctSearch extends Precinct
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['precinct_id', 'school_id'], 'integer'],
            [['precinctnumber'], 'safe'],
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
        $query = Precinct::find();

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
            'precinct_id' => $this->precinct_id,
            'school_id' => $this->school_id,
        ]);

        $query->andFilterWhere(['like', 'precinctnumber', $this->precinctnumber]);

        return $dataProvider;
    }
}
