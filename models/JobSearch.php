<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Job;

/**
 * JobSearch represents the model behind the search form of `app\models\Job`.
 */
class JobSearch extends Job
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id', 'dept_id', 'emp_id', 'edu_id', 'exp_id', 'cur_id', 'country_id', 'status', 'cat_id'], 'integer'],
            [['title', 'description', 'requirements', 'benefits', 'address', 'publish_date', 'close_date'], 'safe'],
            [['salary_from', 'salary_to'], 'number'],
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
        $query = Job::find();

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
            'dept_id' => $this->dept_id,
            'emp_id' => $this->emp_id,
            'edu_id' => $this->edu_id,
            'exp_id' => $this->exp_id,
            'cat_id' => $this->cat_id,
            'salary_from' => $this->salary_from,
            'salary_to' => $this->salary_to,
            'cur_id' => $this->cur_id,
            'country_id' => $this->country_id,
            'publish_date' => $this->publish_date,
            'close_date' => $this->close_date,
            'status' => $this->status,
        ]);

        $query->andFilterWhere(['like', 'title', $this->title])
            ->andFilterWhere(['like', 'description', $this->description])
            ->andFilterWhere(['like', 'requirements', $this->requirements])
            ->andFilterWhere(['like', 'benefits', $this->benefits])
            ->andFilterWhere(['like', 'address', $this->address]);

        return $dataProvider;
    }
}
