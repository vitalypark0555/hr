<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\User */

$this->title = Yii::t('menu', 'Update User: ').$model->username;
$this->params['breadcrumbs'][] = ['label' => Yii::t('menu', 'Users'), 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = Yii::t('menu', 'Update');
?>
<div class="user-update">

    <h3 class="page-title"> <?= Html::encode($this->title) ?>
    </h3>
    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
