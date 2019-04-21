<?php

use yii\widgets\ActiveForm;
use yii\helpers\Html;

?>
<div class="content">
    <!-- BEGIN LOGIN FORM -->
    <?php $form = ActiveForm::begin(); ?>
    <h3 class="form-title font-green">Sign In</h3>
    <div class="alert alert-danger display-hide">
        <button class="close" data-close="alert"></button>
        <span> Enter any username and password. </span>
    </div>
    <div class="form-group">
        <?= Html::activeTextInput($model, 'username', ['class' => 'form-control form-control-solid placeholder-no-fix', 'placeholder' => 'Username']) ?>
    </div>
    <div class="form-group">
        <?= Html::activePasswordInput($model, 'password', ['class' => 'form-control form-control-solid placeholder-no-fix', 'placeholder' => 'Password']) ?>
    </div>
    <div class="form-actions">
        <?= Html::submitButton('login', ['class' => 'btn green uppercase']) ?>
    </div>
    <?php $form = ActiveForm::end(); ?>
</div>