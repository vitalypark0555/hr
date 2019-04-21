<?php
/**
 * Created by PhpStorm.
 * User: Vitaly
 * Date: 03.10.2018
 * Time: 18:58
 */

namespace app\widgets;


use app\models\JobCategory;
use yii\base\Widget;

class JobCategories extends Widget
{
    public $template = 'default';
    public $limit = 8;

    public function run()
    {
        $categories = JobCategory::find()->orderBy('id ASC')->limit($this->limit)->all();
        return $this->render('job-categories/' . $this->template, [
            'categories' => $categories,
        ]);
    }
}