<?php

namespace common\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use common\models\SccCase;

/**
 * SccCaseSearch represents the model behind the search form about `common\models\SccCase`.
 */
class SccCaseSearch extends SccCase
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['case_id', 'profile_id', 'category_id'], 'integer'],
            [['casenumber', 'c_date_time'], 'safe'],
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
        $query = SccCase::find();

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
            'case_id' => $this->case_id,
            'c_date_time' => $this->c_date_time,
            'profile_id' => $this->profile_id,
            'category_id' => $this->category_id,
        ]);

        $query->andFilterWhere(['like', 'casenumber', $this->casenumber]);

        return $dataProvider;
    }
}
