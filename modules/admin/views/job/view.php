<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\Job */

$this->title = $model->title;
$this->params['breadcrumbs'][] = ['label' => 'Jobs', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="job-view">

    <div class="row">
        <div class="col-md-12">
            <div class="portlet box blue-chambray">
                <div class="portlet-title">
                    <div class="caption">
                        <i class="fa fa-briefcase"></i> <?= $this->title ?>
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
                    <div class="form-actions top">
                        <div class="btn-set pull-left">
                            <?= Html::a('<i class="fa fa-refresh"></i> ' . Yii::t('menu', 'Update'), ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
                            <?= Html::a('<i class="fa fa-trash"></i> ' . Yii::t('menu', 'Delete'), ['delete', 'id' => $model->id], [
                                'class' => 'btn btn-danger',
                                'data' => [
                                    'confirm' => 'Are you sure you want to delete this item?',
                                    'method' => 'post',
                                ],
                            ]) ?>
                        </div>
                    </div>
                    <div class="form-body">
                        <?= DetailView::widget([
                            'model' => $model,
                            'attributes' => [
                                'id',
                                'title',
                                [
                                    'attribute' => 'dept_id',
                                    'value' => $model->department->name,
                                ],
                                [
                                    'attribute' => 'emp_type',
                                    'value' => $model->employment->employment,
                                ],
                                [
                                    'attribute' => 'education',
                                    'value' => $model->education->education,
                                ],
                                [
                                    'attribute' => 'experience',
                                    'value' => $model->experience->experience,
                                ],
                                'salary_from',
                                'salary_to',
                                [
                                    'attribute' => 'cur_id',
                                    'value' => $model->currency->code,
                                ],
                                'description:ntext',
                                'requirements:ntext',
                                'benefits:ntext',
                                [
                                    'attribute' => 'country_id',
                                    'value' => $model->country->name,
                                ],
                                'address',
                                'publish_date',
                                'close_date',
                                [
                                    'attribute' => 'status',
                                    'value' => $model->status,
                                ],
                            ],
                        ]) ?>
                    </div>
                </div>
            </div>
        </div>
    </div>



</div>
