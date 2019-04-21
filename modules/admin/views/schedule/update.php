<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Event */

$this->title = Yii::t('menu', 'Update Event: ').$model->title;
$this->params['breadcrumbs'][] = ['label' => Yii::t('menu', 'Schedule'), 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = Yii::t('menu', 'Update');
?>
<div class="schedule-update">

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
