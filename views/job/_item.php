<?php

use yii\helpers\Html;
use yii\helpers\Url;

?>

<div class="job-item">
    <a href="<?= Url::to(['job/view', 'id' => $model->id]); ?>"
       class="listing <?= strtolower($model->employment->employment) ?>">
        <div class="listing-logo">
            <img src="images/job-list-logo-01.png" alt="">
        </div>
        <div class="listing-title">
            <h4><?= $model->title ?> <span class="listing-type"><?= $model->employment->employment ?></span>
            </h4>
            <ul class="listing-icons">
                <li><i class="ln ln-icon-Management"></i> <?= $model->department->name ?></li>
                <li><i class="ln ln-icon-Map2"></i> <?= $model->city ?></li>
                <li><i class="ln ln-icon-Money-2"></i> <?= $model->salary_from ?> - <?= $model->salary_to ?> <?= $model->currency->code ?></li>
<!--                <li>-->
<!--                    <div class="listing-date">new</div>-->
<!--                </li>-->
            </ul>
        </div>
    </a>
</div>