<?php

/* @var $this \yii\web\View */

/* @var $content string */

use app\widgets\Alert;
use yii\helpers\Html;
use yii\helpers\Url;
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
    <header class="transparent sticky-header">
        <div class="container">
            <div class="sixteen columns">

                <!-- Logo -->
                <div id="logo">
                    <h1>
                        <a href="<?= Url::to(['site/index']); ?>"><?= Html::img('@web/images/logo2.png', ['alt' => 'HRTeam']); ?></a>
                    </h1>
                </div>

                <!-- Menu -->
                <nav id="navigation" class="menu">
                    <ul id="responsive">
                        <li>
                            <a href="<?= Url::to(['site/index']); ?>">Home</a>
                        </li>
                        <li>
                            <a href="<?= Url::to(['job/index']); ?>">Jobs</a>
                        </li>
                    </ul>


                    <ul class="float-right">
                        <li><a href="<?= Url::to(['admin/default/index']); ?>"><i class="fa fa-lock"></i> Log In</a>
                        </li>
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
    <!-- Banner
================================================== -->
    <div id="banner" class="with-transparent-header parallax background"
         style="background-image: url(images/banner-home-02.jpg)" data-img-width="2000" data-img-height="1330"
         data-diff="300">
        <div class="container">
            <div class="sixteen columns">
                <div class="search-container">
                    <form action="<?= Url::to(['job/index']); ?>" method="GET">
                            <label for="q">
                               <h2>Find Job</h2>
                            </label>
                        <input type="text" id="q" name="q" placeholder="Enter job title..."/>
                        <button type="submit" value=""><i class="fa fa-search"></i></button>
                    </form>
                </div>

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
