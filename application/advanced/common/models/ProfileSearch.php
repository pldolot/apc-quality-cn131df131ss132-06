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
    public function rules()
    {
        return [
            [['profile_id', 'precinct_id', 'type_id', 'employee_id'], 'integer'],
            [['profilenumber', 'phonenumber', 'profile_firstname', 'profile_middlename', 'profile_lastname', 'profile_picture', 'gsis', 'sss', 'mothers_maiden_name', 'sex'], 'safe'],
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

        $query->andFilterWhere(['like', 'profilenumber', $this->profilenumber])
            ->andFilterWhere(['like', 'phonenumber', $this->phonenumber])
            ->andFilterWhere(['like', 'profile_firstname', $this->profile_firstname])
            ->andFilterWhere(['like', 'profile_middlename', $this->profile_middlename])
            ->andFilterWhere(['like', 'profile_lastname', $this->profile_lastname])
            ->andFilterWhere(['like', 'profile_picture', $this->profile_picture])
            ->andFilterWhere(['like', 'gsis', $this->gsis])
            ->andFilterWhere(['like', 'sss', $this->sss])
            ->andFilterWhere(['like', 'mothers_maiden_name', $this->mothers_maiden_name])
            ->andFilterWhere(['like', 'sex', $this->sex]);

        return $dataProvider;
    }
}
