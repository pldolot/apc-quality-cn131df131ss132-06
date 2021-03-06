<?php

namespace common\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use common\models\Profile;

/**
 * ProfileSearch represents the model behind the search form about `common\models\Profile`.
 */
class ProfileSearch extends Profile
{
    /**
     * @inheritdoc
     */
    public $globalSearch;

    public function rules()
    {
        return [
            [['profile_id', 'precinct_id', 'type_id', 'employee_id'], 'integer'],
            [['profilenumber', 'globalSearch','phonenumber', 'profile_firstname', 'profile_middlename', 'profile_lastname', 'profile_picture', 'gsis', 'sss', 'mothers_maiden_name', 'sex'], 'safe'],
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
        $query = Profile::find();

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
            'profile_id' => $this->profile_id,
            'precinct_id' => $this->precinct_id,
            'type_id' => $this->type_id,
            'employee_id' => $this->employee_id,
        ]);

        $query->orFilterWhere(['like', 'profilenumber', $this->globalSearch])
            ->orFilterWhere(['like', 'phonenumber', $this->globalSearch])
            ->orFilterWhere(['like', 'profile_firstname', $this->globalSearch])
            ->orFilterWhere(['like', 'profile_middlename', $this->globalSearch])
            ->orFilterWhere(['like', 'profile_lastname', $this->globalSearch])
            ->orFilterWhere(['like', 'profile_picture', $this->globalSearch])
            ->orFilterWhere(['like', 'gsis', $this->globalSearch])
            ->orFilterWhere(['like', 'sss', $this->sss])
            ->orFilterWhere(['like', 'mothers_maiden_name', $this->globalSearch])
            ->orFilterWhere(['like', 'sex', $this->globalSearch]);

        return $dataProvider;
    }
}
