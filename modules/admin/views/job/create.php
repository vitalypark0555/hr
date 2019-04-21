<?php

use yii\helpers\Html;


/* @var $this yii\web\View */

$this->title = 'Create Job';
$this->params['breadcrumbs'][] = ['label' => 'Jobs', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="job-create">


    <?= $this->render('_form', [
        'job' => $job,
        'question' => $question,
        'application' => $application,
        'hiringTeam' => $hiringTeam
    ]) ?>

</div>
