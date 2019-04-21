<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "hiring_team".
 *
 * @property int $id
 * @property int $job_id
 * @property int $emp_id
 */
class HiringTeam extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'hiring_team';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['job_id', 'emp_id'], 'integer'],
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
            'emp_id' => 'Emp ID',
        ];
    }
}
