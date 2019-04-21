<?php
/**
 * Created by PhpStorm.
 * User: Vitaly
 * Date: 19.12.2018
 * Time: 9:28
 */

namespace app\models;


use yii\helpers\ArrayHelper;

class JobWithHiringTeam extends Job
{

    /**
     * @var array IDs of the categories
     */
    public $employee_ids = [];

    /**
     * @return array the validation rules.
     */
    public function rules()
    {
        return ArrayHelper::merge(parent::rules(), [
            // each category_id must exist in category table (*1)
            ['employee_ids', 'required'],
            ['employee_ids', 'each', 'rule' => [
                'exist', 'targetClass' => Employee::className(), 'targetAttribute' => 'id'
            ]
            ],
        ]);
    }

    /**
     * @return array customized attribute labels
     */
    public function attributeLabels()
    {
        return ArrayHelper::merge(parent::attributeLabels(), [
            'employee_ids' => '',
        ]);
    }


    public function getHiringTeam()
    {
        $this->employee_ids = [];
        if (!empty($this->id)) {
            $rows = HiringTeam::find()
                ->select(['emp_id'])
                ->where(['job_id' => $this->id])
                ->asArray()
                ->all();
            foreach ($rows as $row) {
                $this->employee_ids[] = $row['emp_id'];
            }
        }
    }

    public function saveHiringTeam()
    {

        HiringTeam::deleteAll(['job_id' => $this->id]);
        if (is_array($this->employee_ids)) {
            foreach ($this->employee_ids as $emp_id) {
                $ht = new HiringTeam();
                $ht->job_id = $this->id;
                $ht->emp_id = $emp_id;
                $ht->save();
            }
        }

    }
}
