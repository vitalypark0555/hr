<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Employment */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="employment-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'employment')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
