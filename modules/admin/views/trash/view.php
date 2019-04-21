<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\User */

$this->title = "bahram94";
$this->params['breadcrumbs'][] = ['label' => 'Trash', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="user-view">
    <div class="row">
        <div class="col-md-12">
            <div class="portlet box blue-chambray">
                <div class="portlet-title">
                    <div class="caption">
                        <i class="icon-user-following"></i> Trash : bahram94
                    </div>
                    <div class="tools">
                        <a href="javascript:;" class="collapse" data-original-title="" title=""> </a>
                        <a href="#portlet-config" data-toggle="modal" class="config" data-original-title=""
                           title=""> </a>
                        <a href="javascript:;" class="reload" data-original-title="" title=""> </a>
                        <a href="javascript:;" class="remove" data-original-title="" title=""> </a>
                    </div>
                </div>

                <div class="portlet-body form">
                    <div class="form-actions top">
                        <div class="btn-set pull-left">
                            <a class="btn btn-primary input-circle" href="#"><i class="icon-arrow-up"></i>
                                Restore</a>
                            <a class="btn btn-danger input-circle" href="#"
                               data-confirm="Are you sure you want to delete this item?"
                               data-method="post"><i class="icon-trash"></i> Trash</a></div>
                    </div>
                    <div class="form-body">
                        <table id="w0" class="table table-striped table-bordered detail-view">
                            <tr>
                                <th>Username</th>
                                <td>bahram94</td>
                            </tr>
                            <tr>
                                <th>First Name</th>
                                <td>Bahram</td>
                            </tr>
                            <tr>
                                <th>Last Name</th>
                                <td>Saidov</td>
                            </tr>
                            <tr>
                                <th>Education</th>
                                <td>Secondary</td>
                            </tr>
                            <tr>
                                <th>Experience</th>
                                <td>1 year</td>
                            </tr>
                        </table>
                    </div>
                </div>
            </div>
        </div>


    </div>


</div>
