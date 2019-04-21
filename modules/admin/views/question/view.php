<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\Question */

$this->title = $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Questions', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="question-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'id',
            'job_id',
            'q1:ntext',
            'q2:ntext',
            'q3:ntext',
            'q4:ntext',
            'q5:ntext',
            'q6:ntext',
            'q7:ntext',
            'q8:ntext',
            'a1:ntext',
            'a2:ntext',
            'a3:ntext',
            'a4:ntext',
            'a5:ntext',
            'a6:ntext',
            'a7:ntext',
            'a8:ntext',
        ],
    ]) ?>

</div>
