<?php

use yii\helpers\Html;

?>
<!-- Job Spotlight -->
<div class="five columns">
    <h3 class="margin-bottom-5">Job Spotlight</h3>

    <!-- Navigation -->
    <div class="showbiz-navigation">
        <div id="showbiz_left_1" class="sb-navigation-left"><i class="fa fa-angle-left"></i></div>
        <div id="showbiz_right_1" class="sb-navigation-right"><i class="fa fa-angle-right"></i></div>
    </div>
    <div class="clearfix"></div>

    <!-- Showbiz Container -->
    <div id="job-spotlight" class="showbiz-container">
        <div class="showbiz" data-left="#showbiz_left_1" data-right="#showbiz_right_1" data-play="#showbiz_play_1">
            <div class="overflowholder">

                <ul>
                    <?php foreach ($jobs as $job): ?>
                        <li>
                            <div class="job-spotlight">
                                <a href="#"><h4><?= $job->title ?> <span
                                                class="<?= strtolower($job->employment->employment) ?>"><?= $job->employment->employment ?> </span>
                                    </h4></a>
                                <span><i class="fa fa-briefcase"></i><?= $job->company ?></span>
                                <span><i class="fa fa-map-marker"></i><?= $job->city ?></span>
                                <span><i class="fa fa-money"></i><?= $job->salary_from ?>
                                    - <?= $job->salary_to ?> <?= $job->currency->code ?></span>
                                <p>
                                <p><?= \yii\helpers\BaseStringHelper::truncate($job->description, 100) ?></p>.</p>
                                <?= Html::a('Apply For This Job', ['job/apply', 'id' => $job->id], ['class' => 'button']) ?>
                            </div>
                        </li>
                    <?php endforeach; ?>
                </ul>
                <div class="clearfix"></div>
            </div>
            <div class="clearfix"></div>
        </div>
    </div>

</div>