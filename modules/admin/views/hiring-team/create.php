<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\HiringTeam */

$this->title = 'Create Hiring Team';
$this->params['breadcrumbs'][] = ['label' => 'Hiring Teams', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="hiring-team-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
