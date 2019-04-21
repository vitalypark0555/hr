<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Event */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="user-form">

    <div class="row">
        <div class="col-md-1"></div>
        <div class="col-md-12">
            <div class="portlet box blue-chambray">
                <div class="portlet-title">
                    <div class="caption">
                        <i class="icon-calendar"></i> Event
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
                    ]); ?>

                    <div class="form-body">
                        <?= $form->field($model, 'title')->textInput(['maxlength' => true, 'placeholder' => 'Enter title', 'class' => 'form-control input-circle']) ?>

                        <?= $form->field($model, 'description')->textInput(['maxlength' => true, 'placeholder' => 'Enter description',  'class' => 'form-control input-circle']) ?>

                        <?= $form->field($model, 'date')->widget(\kartik\datetime\DateTimePicker::classname(), [
                            'type' => \kartik\datetime\DateTimePicker::TYPE_INPUT,
                            'options' => ['placeholder' => 'Choose date', 'class'=>'form-control input-circle'],
                            'pluginOptions' => [
                                'autoclose' => true
                            ]
                        ]); ?>
                        <?= $form->field($model, 'revenue')->textInput(['maxlength' => true, 'placeholder' => 'Enter revenue', 'class' => 'form-control input-circle']) ?>
                    </div>
                    <div class="form-actions">
                        <?= Html::submitButton('<i class="fa fa-save"></i> ' . Yii::t('menu', 'Save'), ['class' => 'btn btn-success']) ?>
                    </div>

                </div>
                <?php ActiveForm::end(); ?>
            </div>
        </div>
    </div>

</div>





