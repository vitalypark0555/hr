<?php

use yii\helpers\Url;

$this->params['breadcrumbs'][] = Yii::t('menu', 'Dashboard');
?>

<div class="row">
    <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
        <a class="dashboard-stat dashboard-stat-v2 blue" href="#">
            <div class="visual">
                <i class="fa fa-briefcase"></i>
            </div>
            <div class="details">
                <div class="number">
                    <span data-counter="counterup" data-value="1349">3</span>
                </div>
                <div class="desc"> New Jobs</div>
            </div>
        </a>
    </div>
    <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
        <a class="dashboard-stat dashboard-stat-v2 red" href="#">
            <div class="visual">
                <i class="fa fa-user-plus"></i>
            </div>
            <div class="details">
                <div class="number">
                    <span data-counter="counterup" data-value="12,5">10</span>
                </div>
                <div class="desc"> New Candidates</div>
            </div>
        </a>
    </div>
    <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
        <a class="dashboard-stat dashboard-stat-v2 green" href="#">
            <div class="visual">
                <i class="fa fa-users"></i>
            </div>
            <div class="details">
                <div class="number">
                    <span data-counter="counterup" data-value="549">4</span>
                </div>
                <div class="desc"> New Users</div>
            </div>
        </a>
    </div>
</div>

<div class="row">
    <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
        <div class="dashboard-stat2 ">
            <div class="display">
                <div class="number">
                    <h3 class="font-green-sharp">
                        <span data-counter="counterup" data-value="7800">3</span>
                    </h3>
                    <small>HIRED</small>
                </div>
                <div class="icon">
                    <i class="icon-user-following"></i>
                </div>
            </div>
            <div class="progress-info">
                <div class="progress">
                                        <span style="width: 76%;" class="progress-bar progress-bar-success green-sharp">
                                            <span class="sr-only">76% progress</span>
                                        </span>
                </div>
                <div class="status">
                    <div class="status-title"> progress</div>
                    <div class="status-number"> 76%</div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
        <div class="dashboard-stat2 ">
            <div class="display">
                <div class="number">
                    <h3 class="font-red-haze">
                        <span data-counter="counterup" data-value="1349">10</span>
                    </h3>
                    <small>TRASHED</small>
                </div>
                <div class="icon">
                    <i class="icon-trash"></i>
                </div>
            </div>
            <div class="progress-info">
                <div class="progress">
                    <span style="width: 85%;" class="progress-bar progress-bar-success red-haze">
                        <span class="sr-only">85% change</span>
                    </span>
                </div>
                <div class="status">
                    <div class="status-title"> change</div>
                    <div class="status-number"> 85%</div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
        <div class="dashboard-stat2 ">
            <div class="display">
                <div class="number">
                    <h3 class="font-blue-sharp">
                        <span data-counter="counterup" data-value="567">7</span>
                    </h3>
                    <small>RESERVED</small>
                </div>
                <div class="icon">
                    <i class="icon-arrow-down"></i>
                </div>
            </div>
            <div class="progress-info">
                <div class="progress">
                                        <span style="width: 45%;" class="progress-bar progress-bar-success blue-sharp">
                                            <span class="sr-only">45% grow</span>
                                        </span>
                </div>
                <div class="status">
                    <div class="status-title"> change</div>
                    <div class="status-number"> 45%</div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
        <div class="dashboard-stat2 ">
            <div class="display">
                <div class="number">
                    <h3 class="font-purple-soft">
                        <span data-counter="counterup" data-value="276">5</span>
                    </h3>
                    <small>INTERVIEWED </small>
                </div>
                <div class="icon">
                    <i class="icon-eye"></i>
                </div>
            </div>
            <div class="progress-info">
                <div class="progress">
                                        <span style="width: 57%;" class="progress-bar progress-bar-success purple-soft">
                                            <span class="sr-only">56% progress</span>
                                        </span>
                </div>
                <div class="status">
                    <div class="status-title"> progress</div>
                    <div class="status-number"> 57%</div>
                </div>
            </div>
        </div>
    </div>
</div>
