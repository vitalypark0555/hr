<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Job */

$this->title = 'Update Job: ' . $job->title;
$this->params['breadcrumbs'][] = ['label' => 'Jobs', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $job->title, 'url' => ['view', 'id' => $job->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="job-update">


    <?= $this->render('_form', [
        'job' => $job,
        'question' => $question,
        'application' => $application,
        'hiringTeam' => $hiringTeam
    ]) ?>

</div>
