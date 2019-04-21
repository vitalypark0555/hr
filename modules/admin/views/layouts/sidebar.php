<?php

use yii\helpers\Url;

?>
<!-- BEGIN SIDEBAR -->
<div class="page-sidebar-wrapper">
    <!-- BEGIN SIDEBAR -->
    <!-- DOC: Set data-auto-scroll="false" to disable the sidebar from auto scrolling/focusing -->
    <!-- DOC: Change data-auto-speed="200" to adjust the sub menu slide up/down speed -->
    <div class="page-sidebar navbar-collapse collapse">
        <!-- BEGIN SIDEBAR MENU -->
        <!-- DOC: Apply "page-sidebar-menu-light" class right after "page-sidebar-menu" to enable light sidebar menu style(without borders) -->
        <!-- DOC: Apply "page-sidebar-menu-hover-submenu" class right after "page-sidebar-menu" to enable hoverable(hover vs accordion) sub menu mode -->
        <!-- DOC: Apply "page-sidebar-menu-closed" class right after "page-sidebar-menu" to collapse("page-sidebar-closed" class must be applied to the body element) the sidebar sub menu mode -->
        <!-- DOC: Set data-auto-scroll="false" to disable the sidebar from auto scrolling/focusing -->
        <!-- DOC: Set data-keep-expand="true" to keep the submenues expanded -->
        <!-- DOC: Set data-auto-speed="200" to adjust the sub menu slide up/down speed -->
        <ul class="page-sidebar-menu  page-header-fixed page-sidebar-menu-hover-submenu " data-keep-expanded="false"
            data-auto-scroll="true" data-slide-speed="200" style="padding-top: 20px">
            <!-- DOC: To remove the sidebar toggler from the sidebar you just need to completely remove the below "sidebar-toggler-wrapper" LI element -->
            <li class="sidebar-toggler-wrapper hide">
                <!-- BEGIN SIDEBAR TOGGLER BUTTON -->
                <div class="sidebar-toggler">
                    <span></span>
                </div>
                <!-- END SIDEBAR TOGGLER BUTTON -->
            </li>
            <li class="nav-item">
                <a href="<?= Url::toRoute(['default/index']) ?>" class="nav-link nav-toggle">
                    <i class="icon-home"></i>
                    <span class="title"><?= Yii::t('menu', 'Dashboard') ?></span>
                    <span class="selected"></span>
                    <span class="arrow open"></span>
                </a>
            </li>
            <li class="heading">
                <h3 class="uppercase"><?= Yii::t('menu', 'Menu') ?></h3>
            </li>
            <li class="nav-item  ">
                <a href="<?= Url::toRoute(['job/index']) ?>" class="nav-link nav-toggle">
                    <i class="icon-briefcase"></i>
                    <span class="title"><?= Yii::t('menu', 'Jobs') ?></span>
                    <span class="selected"></span>
                    <span class="arrow open"></span>
                </a>
                <ul class="sub-menu">
                    <li class="nav-item  ">
                        <a href="<?= Url::toRoute(['job/create']) ?>" class="nav-link ">
                            <span class="title"><?= Yii::t('menu', 'Add Job') ?></span>
                        </a>
                    </li>
                    <li class="nav-item  ">
                        <a href="<?= Url::toRoute(['job/index']) ?>" class="nav-link ">
                            <span class="title"><?= Yii::t('menu', 'All Jobs') ?></span>
                        </a>
                    </li>
                </ul>
            </li>
            <li class="nav-item  ">
                <a href="<?= Url::toRoute(['candidate/index']) ?>" class="nav-link nav-toggle">
                    <i class="icon-user-following"></i>
                    <span class="title"><?= Yii::t('menu', 'Candidates') ?></span>
                    <span class="selected"></span>
                    <span class="arrow open"></span>
                </a>
            </li>
            <li class="nav-item  ">
                <a href="<?= Url::toRoute(['talent/index']) ?>" class="nav-link nav-toggle">
                    <i class="icon-user-follow"></i>
                    <span class="title"><?= Yii::t('menu', 'Talent Pool') ?></span>
                    <span class="selected"></span>
                    <span class="arrow open"></span>
                </a>
            </li>
            <li class="nav-item  ">
                <a href="<?= Url::toRoute(['trash/index']) ?>" class="nav-link nav-toggle">
                    <i class="icon-trash"></i>
                    <span class="title"><?= Yii::t('menu', 'Trash') ?></span>
                    <span class="selected"></span>
                    <span class="arrow open"></span>
                </a>
            </li>
            <li class="nav-item  ">
                <a href="<?= Url::toRoute(['schedule/index']) ?>" class="nav-link nav-toggle">
                    <i class="icon-calendar"></i>
                    <span class="title"><?= Yii::t('menu', 'Schedule') ?></span>
                    <span class="selected"></span>
                    <span class="arrow open"></span>
                </a>
            </li>
            <li class="nav-item  ">
                <a href="<?= Url::toRoute(['report/index']) ?>" class="nav-link nav-toggle">
                    <i class="icon-pie-chart"></i>
                    <span class="title"><?= Yii::t('menu', 'Reports') ?></span>
                    <span class="selected"></span>
                    <span class="arrow open"></span>
                </a>
            </li>
            <li class="nav-item  ">
                <a href="javascript:;" class="nav-link nav-toggle">
                    <i class="icon-settings"></i>
                    <span class="title">Settings</span>
                    <span class="arrow"></span>
                </a>
                <ul class="sub-menu">
                    <li class="nav-item  ">
                        <a href="<?= Url::toRoute(['user/index']) ?>" class="nav-link ">
                            <span class="title">Users</span>
                        </a>
                    </li>
                    <li class="nav-item  ">
                        <a href="<?= Url::toRoute(['employee/index']) ?>" class="nav-link ">
                            <span class="title">Employees</span>
                        </a>
                    </li>
                    <li class="nav-item  ">
                        <a href="<?= Url::toRoute(['position/index']) ?>" class="nav-link ">
                            <span class="title">Positions</span>
                        </a>
                    </li>
                    <li class="nav-item  ">
                        <a href="<?= Url::toRoute(['department/index']) ?>" class="nav-link ">
                            <span class="title">Departments</span>
                        </a>
                    </li>
                    <li class="nav-item  ">
                        <a href="<?= Url::toRoute(['country/index']) ?>" class="nav-link ">
                            <span class="title">Countries</span>
                        </a>
                    </li>
                    <li class="nav-item  ">
                        <a href="<?= Url::toRoute(['currency/index']) ?>" class="nav-link ">
                            <span class="title">Currencies</span>
                        </a>
                    </li>
                </ul>
            </li>

        </ul>
        <!-- END SIDEBAR MENU -->

    </div>
    <!-- END SIDEBAR -->
</div>
<!-- END SIDEBAR -->