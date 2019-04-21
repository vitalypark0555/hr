<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\User */

$this->title = "" . $model->title;
$this->params['breadcrumbs'][] = ['label' => 'Jobs', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="job-view">
    <div class="eleven columns">
        <div class="padding-right">

            <!-- Company Info -->
            <div class="company-info">
                <img src="images/company-logo.png" alt="">
                <div class="content">
                    <h4><?= $model->company ?></h4>
                </div>
                <div class="clearfix"></div>
            </div>

            <p class="margin-reset">
                <?= $model->description ?>
            </p>

            <br>

            <h4 class="margin-bottom-10">Job Requirements</h4>

            <?= $model->requirements ?>
            <br>

            <h4 class="margin-bottom-10">Benefits</h4>
            <?= $model->benefits ?>
        </div>
    </div>
    <div class="five columns">

        <!-- Sort by -->
        <div class="widget">
            <h4>Overview</h4>

            <div class="job-overview">

                <ul>
                    <li>
                        <i class="fa fa-map-marker"></i>
                        <div>
                            <strong>Location:</strong>
                            <span><?= $model->address ?>, <?= $model->city ?>, <?= $model->country->name ?></span>
                        </div>
                    </li>
                    <li>
                        <i class="fa fa-user"></i>
                        <div>
                            <strong>Job Title:</strong>
                            <span><?= $model->title ?></span>
                        </div>
                    </li>
                    <li>
                        <i class="fa fa-clock-o"></i>
                        <div>
                            <strong>Employment Type:</strong>
                            <span><?= $model->employment->employment ?></span>
                        </div>
                    </li>
                    <li>
                        <i class="fa fa-money"></i>
                        <div>
                            <strong>Salary:</strong>
                            <span><?= $model->salary_from ?>
                                - <?= $model->salary_to ?> <?= $model->currency->code ?></span>
                        </div>
                    </li>
                </ul>


                <?= Html::a('Apply For This Job', ['job/apply', 'id' => $model->id], ['class' => 'button']) ?>

            </div>

        </div>

    </div>


