<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use wbraganca\dynamicform\DynamicFormWidget;
use kartik\date\DatePicker;

?>

<?php $form = ActiveForm::begin(['options' => ['enctype' => 'multipart/form-data', 'id' => 'dynamic-form'],
    'validationUrl' => \yii\helpers\Url::to(['/job/validation']),
    'validateOnBlur' => true,
    'validateOnChange' => true,
    'validateOnSubmit' => true,
    'enableAjaxValidation' => true,
    'enableClientValidation' => true]); ?>

<div class="form-body">
    <h5><b>PERSONAL INFORMATION</b></h5>
    <div class="row">
        <div class="col-md-3">
            <?= $form->field($model, 'first_name')->textInput()->label('First Name <i class="fa fa-asterisk text-danger"></i>') ?>
        </div>
        <div class="col-md-3">
            <?= $form->field($model, 'last_name')->textInput()->label('Last Name <i class="fa fa-asterisk text-danger"></i> ') ?>
        </div>
        <div class="col-md-6">
            <?= $form->field($model, 'email')->textInput()->label('Email <i class="fa fa-asterisk text-danger"></i>') ?>
        </div>
    </div>
    <div class="row">
        <div class="col-md-6">
            <?= $form->field($model, 'photoFile')->widget(\dosamigos\fileinput\BootstrapFileInput::className(), [
                'clientOptions' => [
                    'previewFileType' => 'image',
                    'browseClass' => 'btn btn-success',
                    'uploadClass' => 'btn btn-info',
                    'removeClass' => 'btn btn-danger',
                    'removeIcon' => '<i class="glyphicon glyphicon-trash"></i> '
                ]
            ]); ?>
        </div>
        <div class="col-md-6">
            <?= $form->field($model, 'title')->textInput() ?>
        </div>
    </div>
    <div class="row">
        <div class="col-md-6">
            <?= $form->field($model, 'phone')->textInput()->label('Phone <i class="fa fa-asterisk text-danger"></i>') ?>
        </div>
        <div class="col-md-6">
            <?= $form->field($model, 'address')->textInput() ?>
        </div>
    </div>
    <hr/>
    <h5><b>YOUR PROFILE</b></h5>

    <?php DynamicFormWidget::begin([
        'widgetContainer' => 'dynamicform_wrapper', // required: only alphanumeric characters plus "_" [A-Za-z0–9_]
        'widgetBody' => '.container-items', // required: css class selector
        'widgetItem' => '.item', // required: css class
        'limit' => 4, // the maximum times, an element can be cloned (default 999)
        'min' => 1, // 0 or 1 (default 1)
        'insertButton' => '.add-item', // css class
        'deleteButton' => '.remove-item', // css class
        'model' => $modelsEduForm[0],
        'formId' => 'dynamic-form',
        'formFields' => [
            'institution',
            'specialization',
            'edu_id',
            'degree_id',
            'start_date',
            'end_date',
            'currently'
        ],
    ]); ?>
    <h5>Education <i class="fa fa-asterisk text-danger"></i></h5>
    <div class="panel panel-default profile-panel">
        <div class="panel-body container-items">
            <?php foreach ($modelsEduForm as $index => $modelEduForm): ?>
                <div class="item panel panel-default">
                    <div class="panel-heading">
                        <span class="panel-title-address">Education</span>
                        <button type="button" class="pull-right remove-item btn btn-danger btn-xs">
                            <i class="fa fa-minus"></i></button>
                        <div class="clearfix"></div>
                    </div>
                    <div class="panel-body">
                        <?php
                        // necessary for update action.
                        if (!$modelEduForm->isNewRecord) {
                            echo Html::activeHiddenInput($modelEduForm, "[{$index}]id");
                        }
                        ?>
                        <div class="row">
                            <div class="col-md-6">
                                <?= $form->field($modelEduForm, "[{$index}]edu_id")->dropDownList(\yii\helpers\ArrayHelper::map(\app\models\Education::find()->all(), 'id', 'education')) ?>
                            </div>
                            <div class="col-md-6">
                                <?= $form->field($modelEduForm, "[{$index}]degree_id")->dropDownList(\yii\helpers\ArrayHelper::map(\app\models\Degree::find()->all(), 'id', 'degree')) ?>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <?= $form->field($modelEduForm, "[{$index}]institution")->textInput(['maxlength' => true]) ?>
                            </div>
                            <div class="col-md-6">
                                <?= $form->field($modelEduForm, "[{$index}]specialization")->textInput(['maxlength' => true]) ?>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-6">
                                <?= $form->field($modelEduForm, "[{$index}]start_date")->widget(DatePicker::classname(), [
                                    'options' => ['placeholder' => 'From'],
                                    'pluginOptions' => [
                                        'autoclose' => true,
                                        'format' => 'dd-mm-yyyy'
                                    ]
                                ]); ?>
                            </div>
                            <div class="col-md-6">
                                <?= $form->field($modelEduForm, "[{$index}]end_date")->widget(DatePicker::classname(), [
                                    'options' => ['placeholder' => 'To'],
                                    'pluginOptions' => [
                                        'autoclose' => true,
                                        'format' => 'dd-mm-yyyy'
                                    ]
                                ]); ?>
                            </div>
                            <div class="col-md-6">
                                <?= $form->field($modelEduForm, "[{$index}]currently")->widget(\kartik\checkbox\CheckboxX::classname(), [
                                    'autoLabel' => true,
                                    'initInputType' => \kartik\checkbox\CheckboxX::INPUT_CHECKBOX,
                                    'options' => ['value' => $modelEduForm->currently],
                                    'pluginOptions' => [
                                        'enclosedLabel' => true,
                                        'threeState' => false,
                                    ]
                                ])->label(false) ?>
                            </div>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
        <div class="panel-footer profile-panel">
            <button type="button" class="pull-left add-item btn button"><i
                        class="fa fa-plus"></i> Add Education
            </button>
            <div class="clearfix"></div>
        </div>
    </div>
    <?php DynamicFormWidget::end(); ?>
    <?php DynamicFormWidget::begin([
        'widgetContainer' => 'dynamicform_container', // required: only alphanumeric characters plus "_" [A-Za-z0–9_]
        'widgetBody' => '.exp-items', // required: css class selector
        'widgetItem' => '.exp-item', // required: css class
        'limit' => 4, // the maximum times, an element can be cloned (default 999)
        'min' => 1, // 0 or 1 (default 1)
        'insertButton' => '.add-exp', // css class
        'deleteButton' => '.remove-exp', // css class
        'model' => $modelsExpForm[0],
        'formId' => 'dynamic-form',
        'formFields' => [
            'company',
            'industry',
            'title',
            'summary',
            'start_date',
            'end_date',
            'currently'
        ],
    ]); ?>
    <h5>Experience <i class="fa fa-asterisk text-danger"></i></h5>
    <div class="panel panel-default profile-panel">
        <div class="panel-body exp-items">
            <?php foreach ($modelsExpForm as $i => $modelExpForm): ?>
                <div class="exp-item panel panel-default">
                    <div class="panel-heading">
                        <span class="panel-title-address">Experience</span>
                        <button type="button" class="pull-right remove-exp btn btn-danger btn-xs">
                            <i class="fa fa-minus"></i></button>
                        <div class="clearfix"></div>
                    </div>
                    <div class="panel-body">
                        <?php
                        // necessary for update action.
                        if (!$modelExpForm->isNewRecord) {
                            echo Html::activeHiddenInput($modelExpForm, "[{$i}]id");
                        }
                        ?>
                        <div class="row">
                            <div class="col-md-6">
                                <?= $form->field($modelExpForm, "[{$i}]company")->textInput(['maxlength' => true]) ?>
                            </div>
                            <div class="col-md-6">
                                <?= $form->field($modelExpForm, "[{$i}]industry")->textInput(['maxlength' => true]) ?>
                            </div>
                        </div>

                        <?= $form->field($modelExpForm, "[{$i}]title")->textInput(['maxlength' => true]) ?>

                        <?= $form->field($modelExpForm, "[{$i}]summary")->textarea(['rows' => 6]); ?>
                        <div class="row">
                            <div class="col-md-6">
                                <?= $form->field($modelExpForm, "[{$i}]start_date")->widget(DatePicker::classname(), [
                                    'options' => ['placeholder' => 'From'],
                                    'pluginOptions' => [
                                        'autoclose' => true,
                                        'format' => 'dd-mm-yyyy'
                                    ]
                                ]); ?>
                            </div>
                            <div class="col-md-6">
                                <?= $form->field($modelExpForm, "[{$i}]end_date")->widget(DatePicker::classname(), [
                                    'options' => ['placeholder' => 'To'],
                                    'pluginOptions' => [
                                        'autoclose' => true,
                                        'format' => 'dd-mm-yyyy'
                                    ]
                                ]); ?>
                            </div>
                            <div class="col-md-6">
                                <?= $form->field($modelExpForm, "[{$index}]currently")->widget(\kartik\checkbox\CheckboxX::classname(), [
                                    'autoLabel' => true,
                                    'initInputType' => \kartik\checkbox\CheckboxX::INPUT_CHECKBOX,
                                    'options' => ['value' => $modelExpForm->currently],
                                    'pluginOptions' => [
                                        'enclosedLabel' => true,
                                        'threeState' => false,
                                    ]
                                ])->label(false) ?>
                            </div>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
        <div class="panel-footer profile-panel">
            <button type="button" class="pull-left add-exp btn button"><i
                        class="fa fa-plus"></i> Add Experience
            </button>
            <div class="clearfix"></div>
        </div>
    </div>
    <?php DynamicFormWidget::end(); ?>

    <?= $form->field($model, 'summary')->widget(vova07\imperavi\Widget::className(), ['settings' => ['lang' => 'ru',
        'minHeight' => 200,
        'plugins' => ['clips',
            'fullscreen',],
        'clips' => [['Lorem ipsum...', 'Lorem...'],
            ['red', '<span class="label-red">red</span>'],
            ['green', '<span class="label-green">green</span>'],
            ['blue', '<span class="label-blue">blue</span>'],],],])->label('Summary (optional)'); ?>


    <?= $form->field($model, 'resumeFile')->widget(\dosamigos\fileinput\BootstrapFileInput::className(), ['clientOptions' => ['previewFileType' => 'image',
        'browseClass' => 'btn btn-success',
        'uploadClass' => 'btn btn-info',
        'removeClass' => 'btn btn-danger',
        'removeIcon' => '<i class="glyphicon glyphicon-trash"></i> ']])->label('Resume (optional)'); ?>
</div>
<div class="form-actions">
    <div class="row">
        <div class="col-md-12">
            <?= Html::submitButton('Submit', ['class' => 'button']) ?>
        </div>
    </div>
</div>
<?php $form = ActiveForm::end(); ?>


