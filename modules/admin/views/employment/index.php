<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\EmploymentSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Employments';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="employment-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Employment', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'employment',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
