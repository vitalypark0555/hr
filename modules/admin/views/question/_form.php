<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Question */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="question-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'job_id')->textInput() ?>

    <?= $form->field($model, 'q1')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'q2')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'q3')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'q4')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'q5')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'q6')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'q7')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'q8')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'a1')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'a2')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'a3')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'a4')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'a5')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'a6')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'a7')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'a8')->textarea(['rows' => 6]) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
