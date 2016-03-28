<?php

namespace common\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use common\models\CaseStatus;

/**
 * CaseStatusSearch represents the model behind the search form about `common\models\CaseStatus`.
 */
class CaseStatusSearch extends CaseStatus
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['case_status_id', 'cstatus'], 'integer'],
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
        $query = CaseStatus::find();

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
            'case_status_id' => $this->case_status_id,
            'cstatus' => $this->cstatus,
        ]);

        return $dataProvider;
    }
}
