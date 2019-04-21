<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\EventSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = Yii::t('menu', 'Schedule');
$this->params['breadcrumbs'][] = $this->title;

$JSEventClick = <<<EOF
function(calEvent, jsEvent, view) {
    var id = calEvent.id;
        $.ajax({
        url: "view?id=" + id,
        type: 'get',
        success: function(data){
            window.location = "view?id=" + id;
        },
    });
}
EOF;
?>
<div class="schedule-index">

    <div class="row">
        <div class="col-md-12">
            <div class="portlet box blue-chambray">
                <div class="portlet-title">
                    <div class="caption">
                        <i class="icon-calendar"></i> Schedule
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
                            <?= Html::a('<i class="fa fa-plus"></i> ' . 'Create Event', ['create'], ['class' => 'btn btn-success input-circle']); ?>

                        </div>
                    </div>
                    <div class="form-body">
                        <?= \yii2fullcalendar\yii2fullcalendar::widget(array(
                            'events' => $events,
                            'eventClick' => new \yii\web\JsExpression($JSEventClick),
                        )); ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
