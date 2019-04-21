<?php

use yii\bootstrap\ActiveForm;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\bootstrap\Alert;
$this->params['breadcrumbs'][] = 'Profile';
$this->params['breadcrumbs'][] = ['label' => Yii::$app->user->identity->username, 'url' => ['profile', 'id' => Yii::$app->user->identity->id]];
?>
<div class="row">
    <div class ="col-md-12">
        <?php if( Yii::$app->session->hasFlash('success') ): ?>
            <?= Alert::widget([
            'options' => ['class' => 'alert-success'],
            'body' => Yii::$app->session->getFlash('success'),
            ]); ?>
        <?php endif;?>
        <?php if( Yii::$app->session->hasFlash('danger') ): ?>
            <?= Alert::widget([
                'options' => ['class' => 'alert-danger'],
                'body' => Yii::$app->session->getFlash('danger'),
            ]); ?>
        <?php endif;?>
    </div>
    <div class="col-md-12">
        <!-- BEGIN PROFILE SIDEBAR -->
        <div class="profile-sidebar">
            <!-- PORTLET MAIN -->
            <div class="portlet light profile-sidebar-portlet ">
                <!-- SIDEBAR USERPIC -->
                <div class="profile-userpic">
                    <img src="<?= Yii::$app->user->identity->getImage(); ?>" class="img-responsive" alt="">
                </div>
                <!-- END SIDEBAR USERPIC -->
                <!-- SIDEBAR USER TITLE -->
                <div class="profile-usertitle">
                    <div class="profile-usertitle-name"><?= Yii::$app->user->identity->getFullName(); ?></div>
                </div>
                <!-- END SIDEBAR USER TITLE -->


            </div>
            <!-- END PORTLET MAIN -->

        </div>
        <!-- END BEGIN PROFILE SIDEBAR -->
        <!-- BEGIN PROFILE CONTENT -->
        <div class="profile-content">
            <div class="row">
                <div class="col-md-12">
                    <div class="portlet light ">
                        <div class="portlet-title tabbable-line">
                            <div class="caption caption-md">
                                <i class="icon-globe theme-font hide"></i>
                                <span
                                        class="caption-subject font-blue-madison bold uppercase">Profile Account</span>
                            </div>
                            <ul class="nav nav-tabs">
                                <li class="active">
                                    <a href="#tab_1_1" data-toggle="tab">Personal Info</a>
                                </li>
                                <li>
                                    <a href="#tab_1_2" data-toggle="tab">Change Avatar</a>
                                </li>
                                <li>
                                    <a href="#tab_1_3" data-toggle="tab">Change Password</a>
                                </li>

                            </ul>
                        </div>
                        <div class="portlet-body">
                            <div class="tab-content">
                                <!-- PERSONAL INFO TAB -->
                                <div class="tab-pane active" id="tab_1_1">
                                    <div class="user-form">

                                        <?php $form = ActiveForm::begin([
                                            'action' => Url::to(['/admin/default/profile-name'])
                                        ]); ?>
                                        <?= $form->field($profile, 'first_name')->textInput(['maxlength' => true]) ?>

                                        <?= $form->field($profile, 'last_name')->textInput() ?>
                                        <div class="form-group">
                                            <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
                                        </div>


                                        <?php ActiveForm::end(); ?>

                                    </div>
                                </div>
                                <!-- END PERSONAL INFO TAB -->
                                <!-- CHANGE AVATAR TAB -->
                                <div class="tab-pane" id="tab_1_2">

                                    <div class="image-form">

                                        <?php $form = ActiveForm::begin([
                                            'action' => Url::to(['/admin/default/profile-image']),
                                            'options' => ['enctype' => 'multipart/form-data'],
                                        ]); ?>
                                        <?= $form->field($profile, 'image')->fileInput(['maxlength' => true, 'accept' => 'image/*']) ?>

                                        <div class="form-group">
                                            <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
                                        </div>


                                        <?php ActiveForm::end(); ?>

                                    </div>
                                </div>
                                <!-- END CHANGE AVATAR TAB -->
                                <!-- CHANGE PASSWORD TAB -->
                                <div class="tab-pane" id="tab_1_3">
                                    <div class="password-form">

                                        <?php $form = ActiveForm::begin([
                                            'action' => Url::to(['/admin/default/profile-password']),
                                        ]); ?>
                                        <?= $form->field($profile, 'password')->passwordInput() ?>
                                        <?= $form->field($profile, 'repassword')->passwordInput() ?>
                                        <div class="form-group">
                                            <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
                                        </div>
                                        <?php ActiveForm::end(); ?>

                                    </div>
                                </div>
                                <!-- END CHANGE PASSWORD TAB -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- END PROFILE CONTENT -->
    </div>
</div>
