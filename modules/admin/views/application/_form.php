<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Application */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="application-form">

    <?php $form = ActiveForm::begin(); ?>
    <div class="row">
        <div class="col-md-6">
            <?= $form->field($model, 'name')->textInput() ?>
        </div>
        <div class="col-md-6">
            <?= $form->field($model, 'email')->textInput() ?>
        </div>
    </div>
    <div class="row">
        <div class="col-md-6">
            <?= $form->field($model, 'phone')->textInput() ?>
        </div>
        <div class="col-md-6">
            <?= $form->field($model, 'address')->textInput() ?>
        </div>
    </div>
    <div class="row">
        <div class="col-md-6">
            <?= $form->field($model, 'phone')->textInput() ?>
        </div>
        <div class="col-md-6">
            <?= $form->field($model, 'address')->textInput() ?>
        </div>
    </div>
    <div class="row">
        <div class="col-md-6">
            <?= $form->field($model, 'education')->dropDownList(\yii\helpers\ArrayHelper::map(\app\models\Education::find()->all(), 'id', 'education')) ?>
        </div>
        <div class="col-md-6">
            <?= $form->field($model, 'experience')->dropDownList(\yii\helpers\ArrayHelper::map(\app\models\Experience::find()->all(), 'id', 'experience')) ?>

        </div>
    </div>


    <?= $form->field($model, 'photo')->textInput() ?>

    <?= $form->field($model, 'title')->textInput() ?>





    <?= $form->field($model, 'summary')->textInput() ?>

    <?= $form->field($model, 'resume')->widget(\dosamigos\fileinput\BootstrapFileInput::className(), [
        'options' => ['accept' => 'doc/*'],
        'clientOptions' => [
            'previewFileType' => 'image',
            'browseClass' => 'btn btn-success',
            'uploadClass' => 'btn btn-info',
            'removeClass' => 'btn btn-danger',
            'removeIcon' => '<i class="glyphicon glyphicon-trash"></i> '
        ]
    ]); ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
