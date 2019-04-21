<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Currency */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="currency-form">

    <div class="row">
        <div class="col-md-12">
            <div class="portlet box blue-chambray">
                <div class="portlet-title">
                    <div class="caption">
                        <i class="fa fa-dollar"></i> <?= $this->title ?>
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
                        <?= $form->field($model, 'code')->textInput(['class' => 'form-control input-circle', 'maxlength' => true, 'placeholder' => 'Enter code']) ?>
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
