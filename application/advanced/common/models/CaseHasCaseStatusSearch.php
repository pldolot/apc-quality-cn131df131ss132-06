<?php

namespace common\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use common\models\CaseHasCaseStatus;

/**
 * CaseHasCaseStatusSearch represents the model behind the search form about `common\models\CaseHasCaseStatus`.
 */
class CaseHasCaseStatusSearch extends CaseHasCaseStatus
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['case_has_case_status', 'case_id', 'case_status_id', 'employee_id'], 'integer'],
            [['case_date_time'], 'safe'],
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
        $query = CaseHasCaseStatus::find();

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
            'case_has_case_status' => $this->case_has_case_status,
            'case_id' => $this->case_id,
            'case_status_id' => $this->case_status_id,
            'case_date_time' => $this->case_date_time,
            'employee_id' => $this->employee_id,
        ]);

        return $dataProvider;
    }
}
