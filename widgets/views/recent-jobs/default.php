<?php

use yii\helpers\Url;

?>
<div class="eleven columns">
    <div class="padding-right">
        <h3 class="margin-bottom-25">Recent Jobs</h3>
        <div class="listings-container">

            <!-- Listing -->
            <?php foreach ($jobs as $job): ?>
                <a href="<?= Url::to(['job/view', 'id' => $job->id]); ?>"
                   class="listing <?= strtolower($job->employment->employment) ?>">
                    <div class="listing-logo">
                        <img src="images/job-list-logo-01.png" alt="">
                    </div>
                    <div class="listing-title">
                        <h4><?= $job->title ?> <span
                                    class="listing-type"><?= $job->employment->employment ?></span>
                        </h4>
                        <ul class="listing-icons">
                            <li><i class="ln ln-icon-Management"></i> <?= $job->company ?></li>
                            <li><i class="ln ln-icon-Map2"></i> <?= $job->city ?></li>
                            <li><i class="ln ln-icon-Money-2"></i> <?= $job->salary_from ?>
                                - <?= $job->salary_to ?> <?= $job->currency->code ?></li>
                            <!--                <li>-->
                            <!--                    <div class="listing-date">new</div>-->
                            <!--                </li>-->
                        </ul>
                    </div>
                </a>
            <?php endforeach; ?>
        </div>
        <a href="<?= Url::to(['job/index']); ?>" class="button centered"><i class="fa fa-plus-circle"></i> Show
            More Jobs</a>
        <div class="margin-bottom-55"></div>
    </div>
</div>
