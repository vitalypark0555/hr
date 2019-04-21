<?php

/* @var $this yii\web\View */

use yii\widgets\ListView;
use yii\widgets\ActiveForm;
use yii\helpers\Html;

$this->title = 'Browse Jobs';
?>
<div class="job-index">
    <?= \yii2mod\alert\Alert::widget() ?>
    <!-- Recent Jobs -->
    <div class="eleven columns">
        <div class="padding-right">


            <?= ListView::widget([
                'dataProvider' => $dataProvider,
                'layout' => '{items}<br><div class="pagination-container"><nav class="pagination">{pager}</nav></div>',
                'options' => ['class' => 'listings-container'],
                'itemOptions' => ['class' => 'item'],
                'itemView' => '_item',
                'pager' => [
                    'prevPageLabel' => 'Previous',
                    'nextPageLabel' => 'Next',
                    'maxButtonCount' => 12,
                    'options' => ['class' => ''],
                    // Customzing CSS class for pager link
                    'activePageCssClass' => 'active',
                    'disabledPageCssClass' => false,

                    // Customzing CSS class for navigating link
                    'prevPageCssClass' => 'prev',
                    'nextPageCssClass' => 'next',
                ],
            ]) ?>

        </div>
    </div>


    <!-- Widgets -->
    <div class="five columns">
        <?php $form = ActiveForm::begin(); ?>
        <!-- Sort by -->
        <div class="widget">
            <h4>Sort by</h4>
            <?= $form->field($filter, 'title')->textInput(['placeholder' => 'Job title']) ?>
            <?= $form->field($filter, 'cat_id')->dropDownList(\yii\helpers\ArrayHelper::map(\app\models\JobCategory::find()->all(), 'id', 'name'), ['class'=>'chosen-select-no-single']) ?>
            <?= $form->field($filter, 'emp_id')->dropDownList(\yii\helpers\ArrayHelper::map(\app\models\Employment::find()->all(), 'id', 'employment'), ['class'=>'chosen-select-no-single']) ?>
        </div>
        <div class="form-group">
            <?= Html::submitButton('Filter') ?>
        </div>
        <?php ActiveForm::end(); ?>


    </div>
    <!-- Widgets / End -->


</div>


