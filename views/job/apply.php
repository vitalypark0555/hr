<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\Application */

$this->title = 'apply';
$this->params['breadcrumbs'][] = ['label' => 'Jobs', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $job->title, 'url' => ['job/view', 'id'=>$job->id]];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="application-create">


    <?= $this->render('_form', [
        'model' => $model,
        'modelsEduForm' => $modelsEduForm,
        'modelsExpForm' => $modelsExpForm,
        'job' => $job
    ]) ?>

</div>
