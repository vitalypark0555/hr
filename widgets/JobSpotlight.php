<?php
/**
 * Created by PhpStorm.
 * User: Vitaly
 * Date: 03.10.2018
 * Time: 18:58
 */

namespace app\widgets;


use app\models\Job;
use yii\base\Widget;
use yii\db\Expression;

class JobSpotlight extends Widget
{
    public $template = 'default';
    public $limit = 5;

    public function run()
    {
        $jobs = Job::find()->orderBy(new Expression('rand()'))->limit($this->limit)->all();
        return $this->render('job-spotlight/' . $this->template, [
            'jobs' => $jobs,
        ]);
    }
}