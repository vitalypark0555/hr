<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\Department */

$this->title = $model->name;
$this->params['breadcrumbs'][] = ['label' => 'Departments', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="department-view">

    <div class="row">
        <div class="col-md-12">
            <div class="portlet box blue-chambray">
                <div class="portlet-title">
                    <div class="caption">
                        <i class="icon-home"></i> <?= $this->title ?>
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
                            <?= Html::a('<i class="fa fa-refresh"></i> ' . Yii::t('menu', 'Update'), ['update', 'id' => $model->id], ['class' => 'btn btn-primary input-circle']) ?>
                            <?= Html::a('<i class="fa fa-trash"></i> ' . Yii::t('menu', 'Delete'), ['delete', 'id' => $model->id], [
                                'class' => 'btn btn-danger input-circle',
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
                            'name',
                        ],
                    ]) ?>
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>
