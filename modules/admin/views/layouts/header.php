<?php

use yii\helpers\Url;
use yii\helpers\Html;

?>

<!-- BEGIN HEADER -->
<div class="page-header navbar navbar-fixed-top">

    <!-- BEGIN HEADER INNER -->
    <div class="page-header-inner ">
        <!-- BEGIN LOGO -->
        <div class="page-logo">
            <a href="<?= Url::toRoute(['default/index']) ?>">
                <h1>HR</h1></a>
            <div class="menu-toggler sidebar-toggler">
                <span></span>
            </div>
        </div>
        <!-- END LOGO -->
        <!-- BEGIN RESPONSIVE MENU TOGGLER -->
        <a href="javascript:;" class="menu-toggler responsive-toggler" data-toggle="collapse"
           data-target=".navbar-collapse">
            <span></span>
        </a>
        <!-- END RESPONSIVE MENU TOGGLER -->
        <!-- BEGIN TOP NAVIGATION MENU -->
        <div class="top-menu">
            <ul class="nav navbar-nav pull-right">
                <li class="dropdown dropdown-user">
                    <a href="javascript:;" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown"
                       data-close-others="true">
                        <span class="username username-hide-on-mobile"> <?= strtoupper(Yii::$app->language); ?> </span>
                        <i class="fa fa-angle-down"></i>
                    </a>
                    <?= \app\widgets\LanguageWidget::widget(['template' => 'admin']) ?>
                </li>
                <!-- BEGIN USER LOGIN DROPDOWN -->
                <!-- DOC: Apply "dropdown-dark" class after below "dropdown-extended" to change the dropdown styte -->
                <li class="dropdown dropdown-user">
                    <a href="javascript:;" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown"
                       data-close-others="true">
                        <img alt="" class="img-circle" style="width:30px"
                             src=""/>
                        <span class="username username-hide-on-mobile"> <?= Yii::$app->user->identity->first_name; ?> </span>
                        <i class="fa fa-angle-down"></i>
                    </a>
                    <ul class="dropdown-menu dropdown-menu-default">
                        <li>
                            <a href="<?= Url::toRoute(['default/profile']) ?>">
                                <i class="icon-user"></i> <?= Yii::t('menu', 'My Profile') ?> </a>
                        </li>

                        <li>
                            <a href="<?= Url::toRoute(['default/logout']) ?>">
                                <i class="icon-key"></i> <?= Yii::t('menu', 'Log Out') ?> </a>
                        </li>
                    </ul>
                </li>
                <!-- END USER LOGIN DROPDOWN -->
            </ul>
        </div>
        <!-- END TOP NAVIGATION MENU -->
    </div>
    <!-- END HEADER INNER -->
</div>
<!-- END HEADER -->
