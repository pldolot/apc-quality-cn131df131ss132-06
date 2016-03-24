<?php

namespace common\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use common\models\Barangay;

/**
 * BarangaySearch represents the model behind the search form about `common\models\Barangay`.
 */
class BarangaySearch extends Barangay
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['barangay_id', 'district_id'], 'integer'],
            [['barangay'], 'safe'],
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
        $query = Barangay::find();

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
            'barangay_id' => $this->barangay_id,
            'district_id' => $this->district_id,
        ]);

        $query->andFilterWhere(['like', 'barangay', $this->barangay]);

        return $dataProvider;
    }
}
