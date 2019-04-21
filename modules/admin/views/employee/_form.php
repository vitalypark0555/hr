<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\helpers\ArrayHelper;
use app\models\Position;
use app\models\Department;

/* @var $this yii\web\View */
/* @var $model app\models\Employee */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="employee-form">
    <div class="row">
        <div class="col-md-12">
            <div class="portlet box blue-chambray">
                <div class="portlet-title">
                    <div class="caption">
                        <i class="fa fa-black-tie"></i> <?= $this->title ?>
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
                    <?php $form = ActiveForm::begin([
                        'fieldConfig' => [
                            'inputOptions' => ['class'  => 'input-circle form-control']
                        ],
                    ]); ?>

                    <div class="form-body">
                        <?= $form->field($model, 'first_name')->textInput(['maxlength' => true]) ?>

                        <?= $form->field($model, 'last_name')->textInput(['maxlength' => true]) ?>

                        <?= $form->field($model, 'email')->textInput(['maxlength' => true]) ?>

                        <?= $form->field($model, 'phone')->textInput(['maxlength' => true]) ?>

                        <?= $form->field($model, 'pos_id')->dropDownList(ArrayHelper::map(Position::find()->all(), 'id', 'name')) ?>

                        <?= $form->field($model, 'dept_id')->dropDownList(ArrayHelper::map(Department::find()->all(), 'id', 'name')) ?>

                        <?= $form->field($model, 'ht')->checkbox() ?>
                    </div>
                    <div class="form-actions">
                        <?= Html::submitButton('<i class="fa fa-save"></i> ' . Yii::t('menu', 'Save'), ['class' => 'btn btn-success input-circle']) ?>
                    </div>

                </div>
                <?php ActiveForm::end(); ?>
            </div>
        </div>
    </div>


</div>
