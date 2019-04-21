<?php

/* @var $this \yii\web\View */

/* @var $content string */

use app\widgets\Alert;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\widgets\Breadcrumbs;
use app\assets\AppAsset;

AppAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php $this->registerCsrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>
</head>
<body>
<?php $this->beginBody() ?>

<div class="wrap">
    <!-- Header
    ================================================== -->
    <header class="sticky-header">
        <div class="container">
            <div class="sixteen columns">

                <!-- Logo -->
                <div id="logo">
                    <h1><a href="<?= Url::to(['site/index']); ?>"><?= Html::img('@web/images/logo.png', ['alt' => 'HRTeam']); ?></a></h1>
                </div>

                <!-- Menu -->
                <nav id="navigation" class="menu">
                    <ul id="responsive">
                        <li><a href="<?= Url::to(['site/index']); ?>">Home</a></li>
                        <li><a href="<?= Url::to(['job/index']); ?>">Jobs</a></li>
                    </ul>

                    <ul class="float-right">
                        <li><a href="<?= Url::to(['admin/default/index']); ?>"><i class="fa fa-lock"></i> Log In</a></li>
                    </ul>

                </nav>

                <!-- Navigation -->
                <div id="mobile-navigation">
                    <a href="#menu" class="menu-trigger"><i class="fa fa-reorder"></i> Menu</a>
                </div>

            </div>
        </div>
    </header>
    <div class="clearfix"></div>
    <div id="titlebar" class="single">
        <div class="container">

            <div class="sixteen columns">
                <h2><?= $this->title ?></h2>
                <nav id="breadcrumbs">
                    <?= Breadcrumbs::widget([
                        'options' => ['class' => 'breadcrumb', 'style' => 'padding:0 0 0 0'],
                        'links' => isset($this->params['breadcrumbs']) ? $this->params['breadcrumbs'] : [],
                    ]) ?>
                </nav>
            </div>

        </div>
    </div>
    <div class="container">

        <?= Alert::widget() ?>
        <?= $content ?>
    </div>
</div>

<!-- Footer
================================================== -->
<?= $this->render(
    'footer.php'
)
?>

<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
