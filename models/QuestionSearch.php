<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Question;

/**
 * QuestionSearch represents the model behind the search form of `app\models\Question`.
 */
class QuestionSearch extends Question
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id', 'job_id'], 'integer'],
            [['q1', 'q2', 'q3', 'q4', 'q5', 'q6', 'q7', 'q8', 'a1', 'a2', 'a3', 'a4', 'a5', 'a6', 'a7', 'a8'], 'safe'],
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
        $query = Question::find();

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
            'job_id' => $this->job_id,
        ]);

        $query->andFilterWhere(['like', 'q1', $this->q1])
            ->andFilterWhere(['like', 'q2', $this->q2])
            ->andFilterWhere(['like', 'q3', $this->q3])
            ->andFilterWhere(['like', 'q4', $this->q4])
            ->andFilterWhere(['like', 'q5', $this->q5])
            ->andFilterWhere(['like', 'q6', $this->q6])
            ->andFilterWhere(['like', 'q7', $this->q7])
            ->andFilterWhere(['like', 'q8', $this->q8])
            ->andFilterWhere(['like', 'a1', $this->a1])
            ->andFilterWhere(['like', 'a2', $this->a2])
            ->andFilterWhere(['like', 'a3', $this->a3])
            ->andFilterWhere(['like', 'a4', $this->a4])
            ->andFilterWhere(['like', 'a5', $this->a5])
            ->andFilterWhere(['like', 'a6', $this->a6])
            ->andFilterWhere(['like', 'a7', $this->a7])
            ->andFilterWhere(['like', 'a8', $this->a8]);

        return $dataProvider;
    }
}
