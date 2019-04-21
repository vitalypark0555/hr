<?php

/* @var $this yii\web\View */

$this->title = 'HRTeam';
?>
<div class="site-index">
    <?= \app\widgets\JobCategories::widget() ?>

    <div class="container">
        <?= \app\widgets\RecentJobs::widget() ?>
        <?= \app\widgets\JobSpotlight::widget() ?>
    </div>


</div>
