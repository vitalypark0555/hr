<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\UserSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = Yii::t('menu', 'Candidates');
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="candidate-index">

    <?php foreach ($jobs

                   as $job):
        $searchModel = new \app\models\ApplicationFormSearch();
        ?>
        <div class="row">
            <div class="col-md-12">
                <div class="portlet box blue-chambray">
                    <div class="portlet-title">
                        <div class="caption">
                            <i class="icon-user-following"></i> <?= $job->title ?>
                        </div>
                        <div class="tools">
                            <a href="javascript:;" class="collapse" data-original-title="" title=""> </a>
                            <a href="#portlet-config" data-toggle="modal" class="config" data-original-title=""
                               title=""> </a>
                            <a href="javascript:;" class="reload" data-original-title="" title=""> </a>
                            <a href="javascript:;" class="remove" data-original-title="" title=""> </a>
                        </div>
                    </div>
                    <div class="portlet-body form">
                        <div class="form-body">
                            <?= GridView::widget([
                                'dataProvider' => $searchModel->getByJobID($job->id),
                                'filterModel' => $searchModel,
                                'columns' => [
                                    ['class' => 'yii\grid\SerialColumn'],
                                    [
                                        'attribute' => 'photo',
                                        'format' => 'html',
                                        'value' => function ($data) {
                                            return Html::img(Yii::getAlias('@web') . '/uploads/photos/' . $data['photo'],
                                                ['width' => '70px']);
                                        },
                                    ],
                                    [
                                        'attribute' => 'resume',
                                        'format' => 'raw',
                                        'value' => function ($data) {
                                            return
                                                Html::a('Download CV', ['candidate/download', 'id' => $data->id], ['class' => 'btn btn-primary']);

                                        }
                                    ],
                                    'first_name',
                                    'last_name',
                                    'email:email',
                                    'phone',
                                    'address',
                                    'created_at',
                                    //'photo',
                                    //'title',
                                    //'exp_id',
                                    //'emp_id',
                                    //'summary:ntext',

                                    //'resume',

                                    [
                                        'class' => 'yii\grid\ActionColumn',
                                        'template' => '{view} {delete}',
                                    ],
                                ],
                            ]); ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    <?php endforeach; ?>

</div>

