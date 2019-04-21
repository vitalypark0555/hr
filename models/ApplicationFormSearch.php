<?php

namespace app\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\ApplicationForm;

/**
 * ApplicationFormSearch represents the model behind the search form of `app\models\ApplicationForm`.
 */
class ApplicationFormSearch extends ApplicationForm
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id', 'exp_id', 'emp_id', 'job_id'], 'integer'],
            [['first_name', 'last_name', 'email', 'phone', 'address', 'photo', 'title', 'summary', 'resume'], 'safe'],
        ];
    }

    /**
     * {@inheritdoc}
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
        $query = ApplicationForm::find();

        // add conditions that should always apply here

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);

        $this->load($params);

        if (!$this->validate()) {
            // uncomment the following line if you do not want to return any records when validation fails
            // $query->where('0=1');
            return $dataProvider;
        }

        // grid filtering conditions
        $query->andFilterWhere([
            'id' => $this->id,
            'exp_id' => $this->exp_id,
            'emp_id' => $this->emp_id,
            'job_id' => $this->job_id
        ]);

        $query->andFilterWhere(['like', 'name', $this->first_name])
            ->andFilterWhere(['like', 'name', $this->last_name])
            ->andFilterWhere(['like', 'email', $this->email])
            ->andFilterWhere(['like', 'phone', $this->phone])
            ->andFilterWhere(['like', 'address', $this->address])
            ->andFilterWhere(['like', 'photo', $this->photo])
            ->andFilterWhere(['like', 'title', $this->title])
            ->andFilterWhere(['like', 'summary', $this->summary])
            ->andFilterWhere(['like', 'resume', $this->resume]);

        return $dataProvider;
    }

    public function getByJobID($id)
    {
        $query = ApplicationForm::find()->joinWith('job')->where(['job_id'=>$id]);

        // add conditions that should always apply here

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);


        return $dataProvider;
    }
}
