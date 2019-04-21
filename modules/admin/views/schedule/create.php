<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\Event */

$this->title = Yii::t('menu', 'Create Event');
$this->params['breadcrumbs'][] = ['label' => Yii::t('menu', 'Schedule'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="schedule-create">

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
