<?php

/* @var $this \yii\web\View */
/* @var $content string */

use app\assets\AdminAsset;
use yii\helpers\Html;


AdminAsset::register($this);
?>
<?php $this->beginPage() ?>
    <!DOCTYPE html>

    <!--[if IE 8]>
    <html lang="en" class="ie8 no-js"> <![endif]-->
    <!--[if IE 9]>
    <html lang="en" class="ie9 no-js"> <![endif]-->
    <!--[if !IE]><!-->
    <html lang="en">
    <!--<![endif]-->
    <!-- BEGIN HEAD -->

    <head>
        <meta charset="<?= Yii::$app->charset ?>">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <?= Html::csrfMetaTags() ?>
        <title><?= Html::encode($this->title) ?></title>
        <?php $this->head() ?>
        <link rel="shortcut icon" href="favicon.ico"/>
    </head>
    <!-- END HEAD -->

    <body class=" login">
    <?php $this->beginBody() ?>
    <!-- BEGIN LOGO -->
    <div class="logo">

    </div>
    <!-- END LOGO -->
    <!-- BEGIN LOGIN -->
    <?= $content ?>
    <!-- END LOGIN -->
    <!-- BEGIN COPYRIGHT -->
    <div class="copyright"> 2018 &copy; HR</div>
    <!-- END COPYRIGHT -->
    <?php $this->endBody() ?>
    </body>

    </html>
<?php $this->endPage() ?>