<?php

namespace common\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use common\models\Employee;

/**
 * EmployeeSearch represents the model behind the search form about `common\models\Employee`.
 */
class EmployeeSearch extends Employee
{
    /**
     * @inheritdoc
     */
    public $globalSearch;



    public function rules()
    {
        return [
            [['employee_id', 'position_id', 'user_id'], 'integer'],

            [['id_number', 'globalSearch','firstname', 'lastname', 'middlename', 'sex', 'employee_status'], 'safe'],

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
        $query = Employee::find();

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
            'employee_id' => $this->employee_id,
            'position_id' => $this->position_id,
            'user_id' => $this->user_id,
        ]);

<<<<<<< HEAD
        $query->orFilterWhere(['like', 'id_number', $this->globalSearch])
            ->orFilterWhere(['like', 'firstname', $this->globalSearch])
            ->orFilterWhere(['like', 'lastname', $this->globalSearch])
            ->orFilterWhere(['like', 'middlename', $this->globalSearch])
            ->orFilterWhere(['like', 'sex', $this->globalSearch])
            ->orFilterWhere(['like', 'employee_status', $this->globalSearch]);
=======
        $query->andFilterWhere(['like', 'id_number', $this->id_number])
            ->andFilterWhere(['like', 'firstname', $this->firstname])
            ->andFilterWhere(['like', 'lastname', $this->lastname])
            ->andFilterWhere(['like', 'middlename', $this->middlename])
            ->andFilterWhere(['like', 'sex', $this->sex])
            ->andFilterWhere(['like', 'employee_status', $this->employee_status]);
>>>>>>> d033b540ff923d36abca6b8ad0194be18cb39192

        return $dataProvider;
    }
}
