<?php

namespace common\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use common\models\School;

/**
 * SchoolSearch represents the model behind the search form about `common\models\School`.
 */
class SchoolSearch extends School
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['school_id', 'barangay_id'], 'integer'],
            [['school_name'], 'safe'],
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
        $query = School::find();

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
            'school_id' => $this->school_id,
            'barangay_id' => $this->barangay_id,
        ]);

        $query->andFilterWhere(['like', 'school_name', $this->school_name]);

        return $dataProvider;
    }
}
