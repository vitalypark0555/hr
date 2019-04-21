<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\UserSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = Yii::t('menu', 'Trash');
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="trash-index">

    <div class="row">
        <div class="col-md-12">
            <div class="portlet box blue-chambray">
                <div class="portlet-title">
                    <div class="caption">
                        <i class="icon-trash"></i> Trash
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
                    <div class="form-body">
                        <table class="table table-striped table-bordered table-hover table-checkable order-column"
                               id="sample_2">
                            <thead>
                            <tr>
                                <th> Username</th>
                                <th> Education </th>
                                <th> Experience </th>
                                <th> Application Date </th>
                                <th> Actions</th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr class="odd gradeX">
                                <td>bahram94</td>
                                <td>
                                    Secondary
                                </td>
                                <td>
                                    1 year
                                </td>
                                <td class="center"> 03 Jan 2019</td>
                                <td class="center">
                                    <div class="btn-group">
                                        <button class="btn btn-xs green dropdown-toggle" type="button"
                                                data-toggle="dropdown" aria-expanded="false"> Actions
                                            <i class="fa fa-angle-down"></i>
                                        </button>
                                        <ul class="dropdown-menu" role="menu">
                                            <li>
                                                <?= Html::a('<i class="icon-eye"></i> ' . Yii::t('menu', 'View'), ['view']) ?>
                                            </li>
                                            <li>
                                                <a href="javascript:;">
                                                    <i class="icon-arrow-up"></i> Restore </a>
                                            </li>
                                            <li>
                                                <a href="javascript:;">
                                                    <i class="icon-trash"></i> Delete
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
