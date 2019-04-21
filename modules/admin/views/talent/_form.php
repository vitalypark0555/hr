<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\User */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="user-form">

    <div class="row">
        <div class="col-md-1"></div>
        <div class="col-md-10">
            <div class="portlet box blue-chambray">
                <div class="portlet-title">
                    <div class="caption">
                        <i class="fa fa-user"></i> User
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
                        <?= $form->field($model, 'first_name')->textInput(['class' => 'form-control input-circle', 'maxlength' => true, 'placeholder' => Yii::t('placeholder', 'Enter first name')]) ?>

                        <?= $form->field($model, 'last_name')->textInput(['class' => 'form-control input-circle', 'placeholder' => Yii::t('placeholder', 'Enter last name')]) ?>

                        <?= $form->field($model, 'username')->textInput(['class' => 'form-control input-circle', 'maxlength' => true, 'placeholder' => Yii::t('placeholder', 'Enter username')]) ?>

                        <?= $form->field($model, 'password')->passwordInput(['class' => 'form-control input-circle', 'maxlength' => true, 'placeholder' => Yii::t('placeholder', 'Enter password')]) ?>

                        <?= $form->field($model, 'repassword')->passwordInput(['class' => 'form-control input-circle', 'maxlength' => true, 'placeholder' => Yii::t('placeholder', 'Enter password')]) ?>
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





