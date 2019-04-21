<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "question".
 *
 * @property int $id
 * @property int $job_id
 * @property string $q1
 * @property string $q2
 * @property string $q3
 * @property string $q4
 * @property string $q5
 * @property string $q6
 * @property string $q7
 * @property string $q8
 * @property string $a1
 * @property string $a2
 * @property string $a3
 * @property string $a4
 * @property string $a5
 * @property string $a6
 * @property string $a7
 * @property string $a8
 */
class Question extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'question';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['job_id'], 'integer'],
            [['q1', 'q2', 'q3', 'q4', 'q5', 'q6', 'q7', 'q8', 'a1', 'a2', 'a3', 'a4', 'a5', 'a6', 'a7', 'a8'], 'required'],
            [['q1', 'q2', 'q3', 'q4', 'q5', 'q6', 'q7', 'q8', 'a1', 'a2', 'a3', 'a4', 'a5', 'a6', 'a7', 'a8'], 'string'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'job_id' => 'Job ID',
            'q1' => 'Question #1',
            'q2' => 'Question #2',
            'q3' => 'Question #3',
            'q4' => 'Question #4',
            'q5' => 'Question #5',
            'q6' => 'Question #6',
            'q7' => 'Question #7',
            'q8' => 'Question #8',
            'a1' => 'Answer #1',
            'a2' => 'Answer #2',
            'a3' => 'Answer #3',
            'a4' => 'Answer #4',
            'a5' => 'Answer #5',
            'a6' => 'Answer #6',
            'a7' => 'Answer #7',
            'a8' => 'Answer #8',
        ];
    }
}
