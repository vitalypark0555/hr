<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\JobCategory */

$this->title = Yii::t('job', 'Update Job Category: {name}', [
    'name' => $model->name,
]);
$this->params['breadcrumbs'][] = ['label' => Yii::t('job', 'Job Categories'), 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->name, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = Yii::t('job', 'Update');
?>
<div class="job-category-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
