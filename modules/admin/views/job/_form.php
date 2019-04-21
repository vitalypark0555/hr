<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use buttflattery\formwizard\FormWizard;

/* @var $this yii\web\View */
/* @var $model app\models\Job */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="job-form">

    <div class="row">
        <div class="col-md-12">
            <div class="portlet box blue-chambray">
                <div class="portlet-title">
                    <div class="caption">
                        <i class="fa fa-briefcase"></i> <?= $this->title ?>
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
                        <?= FormWizard::widget([
                            'theme' => FormWizard::THEME_ARROWS,
                            'steps' => [
                                [
                                    'model' => $job,
                                    'title' => 'JOB DESCRIPTION',
                                    'description' => 'Describe job functions, 
                                    requirements, benefits',
                                    'formInfoText' => '',
                                    'fieldConfig' => [
                                        'title' => [
                                            'options' => [
                                                'class' => 'form-control input-circle',
                                            ],
                                            'containerOptions' => [
                                                'class' => 'form-group col-md-6',
                                                'style' => 'height:70px'
                                            ],
                                            'labelOptions' => [
                                                'class' => "fa fa-asterisk text-danger"
                                            ]
                                        ],
                                        'cat_id' => [
                                            'options' => [
                                                'class' => 'form-control input-circle',
                                                'type' => 'dropdown',
                                                'itemsList' => \yii\helpers\ArrayHelper::map(\app\models\JobCategory::find()->all(), 'id', 'name')

                                            ],
                                            'containerOptions' => [
                                                'class' => 'form-group col-md-6',
                                                'style' => 'height:70px'
                                            ],
                                            'labelOptions' => [
                                                'class' => "fa fa-asterisk text-danger"
                                            ]
                                        ],
                                        'company' => [
                                            'options' => [
                                                'class' => 'form-control input-circle',
                                            ],
                                            'containerOptions' => [
                                                'class' => 'form-group col-md-6',
                                                'style' => 'height:70px'
                                            ],
                                            'labelOptions' => [
                                                'class' => "fa fa-asterisk text-danger"
                                            ]
                                        ],
                                        'dept_id' => [
                                            'options' => [
                                                'class' => 'form-control input-circle',
                                                'type' => 'dropdown',
                                                'itemsList' => \yii\helpers\ArrayHelper::map(\app\models\Department::find()->all(), 'id', 'name')
                                            ],
                                            'containerOptions' => [
                                                'class' => 'form-group col-md-6',
                                                'style' => 'height:70px'
                                            ]
                                        ],
                                        'emp_id' => [
                                            'options' => [
                                                'class' => 'form-control input-circle',
                                                'type' => 'dropdown',
                                                'itemsList' => [
                                                    \yii\helpers\ArrayHelper::map(\app\models\Employment::find()->all(), 'id', 'employment')
                                                ]
                                            ],
                                            'containerOptions' => [
                                                'class' => 'form-group col-md-4'
                                            ]
                                        ],
                                        'edu_id' => [
                                            'options' => [
                                                'class' => 'form-control input-circle',
                                                'type' => 'dropdown',
                                                'itemsList' => [
                                                    \yii\helpers\ArrayHelper::map(\app\models\Education::find()->all(), 'id', 'education')
                                                ]
                                            ],
                                            'containerOptions' => [
                                                'class' => 'form-group col-md-4'
                                            ]
                                        ],
                                        'exp_id' => [
                                            'options' => [
                                                'class' => 'form-control input-circle',
                                                'type' => 'dropdown',
                                                'itemsList' => [
                                                    \yii\helpers\ArrayHelper::map(\app\models\Experience::find()->all(), 'id', 'experience')
                                                ]
                                            ],
                                            'containerOptions' => [
                                                'class' => 'form-group col-md-4'
                                            ]
                                        ]
                                        ,
                                        'salary_from' => [
                                            'options' => [
                                                'class' => 'form-control input-circle'
                                            ],
                                            'containerOptions' => [
                                                'class' => 'form-group col-md-4',
                                                'style' => 'height:20px'
                                            ]
                                        ],
                                        'salary_to' => [
                                            'options' => [
                                                'class' => 'form-control input-circle'
                                            ],
                                            'containerOptions' => [
                                                'class' => 'form-group col-md-4'
                                            ]
                                        ],
                                        'cur_id' => [
                                            'options' => [
                                                'class' => 'form-control input-circle',
                                                'type' => 'dropdown',
                                                'itemsList' => \yii\helpers\ArrayHelper::map(\app\models\Currency::find()->all(), 'id', 'code')
                                            ],
                                            'containerOptions' => [
                                                'class' => 'form-group col-md-4'
                                            ]
                                        ],
                                        'country_id' => [
                                            'options' => [
                                                'class' => 'form-control input-circle',
                                                'type' => 'dropdown',
                                                'itemsList' => \yii\helpers\ArrayHelper::map(\app\models\Country::find()->all(), 'id', 'name')
                                            ],
                                            'containerOptions' => [
                                                'class' => 'form-group col-md-4'
                                            ],
                                        ],
                                        'city' => [
                                            'options' => [
                                                'class' => 'form-control input-circle',
                                                'placeholder' => 'City'
                                            ],
                                            'containerOptions' => [
                                                'class' => 'form-group col-md-4'
                                            ],
                                        ],
                                        'address' => [
                                            'options' => [
                                                'class' => 'form-control input-circle',
                                                'placeholder' => 'Address'
                                            ],
                                            'containerOptions' => [
                                                'class' => 'form-group col-md-4'
                                            ],
                                        ],
                                        'description' => [
                                            'widget' => \vova07\imperavi\Widget::className(),
                                            'containerOptions' => [
                                                'class' => 'form-group col-md-12'
                                            ]
                                        ],
                                        'requirements' => [
                                            'widget' => \vova07\imperavi\Widget::className(),
                                            'containerOptions' => [
                                                'class' => 'form-group col-md-12'
                                            ],
                                        ],
                                        'benefits' => [
                                            'widget' => \vova07\imperavi\Widget::className(),
                                            'containerOptions' => [
                                                'class' => 'form-group col-md-12'
                                            ],
                                        ],
                                        'status' => [
                                            'options' => [
                                                'class' => 'form-control input-circle',
                                                'type' => 'dropdown',
                                                'itemsList' => [
                                                    1 => 'Draft',
                                                    2 => 'Published',
                                                ]
                                            ],
                                            'containerOptions' => [
                                                'class' => 'form-group col-md-12'
                                            ],
                                        ],
                                    ],
                                ],
                                [
                                    'model' => $application,
                                    'title' => 'APPLICATION FORM',
                                    'description' => 'Create the application form',
                                    'formInfoText' => '',
                                    'fieldConfig' => [
                                        'name' => [
                                            'options' => [
                                                'class' => 'form-control input-circle',
                                                'type' => 'dropdown',
                                                'itemsList' => [
                                                    1 => 'COMPULSORY',
                                                ]
                                            ],
                                            'containerOptions' => [
                                                'class' => 'form-group col-md-3'
                                            ],
                                        ],
                                        'email' => [
                                            'options' => [
                                                'class' => 'form-control input-circle',
                                                'type' => 'dropdown',
                                                'itemsList' => [
                                                    1 => 'COMPULSORY',
                                                ]
                                            ],
                                            'containerOptions' => [
                                                'class' => 'form-group col-md-3'
                                            ],
                                        ],
                                        'phone' => [
                                            'options' => [
                                                'class' => 'form-control input-circle',
                                                'type' => 'dropdown',
                                                'itemsList' => [
                                                    2 => 'OPTIONAL',
                                                    1 => 'COMPULSORY',
                                                    0 => 'OFF'
                                                ]
                                            ],
                                            'containerOptions' => [
                                                'class' => 'form-group col-md-3'
                                            ],
                                        ],
                                        'address' => [
                                            'options' => [
                                                'class' => 'form-control input-circle',
                                                'type' => 'dropdown',
                                                'itemsList' => [
                                                    2 => 'OPTIONAL',
                                                    1 => 'COMPULSORY',
                                                    0 => 'OFF'
                                                ]
                                            ],
                                            'containerOptions' => [
                                                'class' => 'form-group col-md-3'
                                            ],
                                        ],
                                        'photo' => [
                                            'options' => [
                                                'class' => 'form-control input-circle',
                                                'type' => 'dropdown',
                                                'itemsList' => [
                                                    2 => 'OPTIONAL',
                                                    1 => 'COMPULSORY',
                                                    0 => 'OFF'
                                                ]
                                            ],
                                            'containerOptions' => [
                                                'class' => 'form-group col-md-3'
                                            ],
                                        ],
                                        'title' => [
                                            'options' => [
                                                'class' => 'form-control input-circle',
                                                'type' => 'dropdown',
                                                'itemsList' => [
                                                    2 => 'OPTIONAL',
                                                    1 => 'COMPULSORY',
                                                    0 => 'OFF'
                                                ]
                                            ],
                                            'containerOptions' => [
                                                'class' => 'form-group col-md-3'
                                            ],
                                        ],
                                        'education' => [
                                            'options' => [
                                                'class' => 'form-control input-circle',
                                                'type' => 'dropdown',
                                                'itemsList' => [
                                                    2 => 'OPTIONAL',
                                                    1 => 'COMPULSORY',
                                                    0 => 'OFF'
                                                ]
                                            ],
                                            'containerOptions' => [
                                                'class' => 'form-group col-md-3'
                                            ],
                                        ],
                                        'experience' => [
                                            'options' => [
                                                'class' => 'form-control input-circle',
                                                'type' => 'dropdown',
                                                'itemsList' => [
                                                    2 => 'OPTIONAL',
                                                    1 => 'COMPULSORY',
                                                    0 => 'OFF'
                                                ]
                                            ],
                                            'containerOptions' => [
                                                'class' => 'form-group col-md-3'
                                            ],
                                        ],
                                        'summary' => [
                                            'options' => [
                                                'class' => 'form-control input-circle',
                                                'type' => 'dropdown',
                                                'itemsList' => [
                                                    2 => 'OPTIONAL',
                                                    1 => 'COMPULSORY',
                                                    0 => 'OFF'
                                                ]
                                            ],
                                            'containerOptions' => [
                                                'class' => 'form-group col-md-3'
                                            ],
                                        ],
                                        'resume' => [
                                            'options' => [
                                                'class' => 'form-control input-circle',
                                                'type' => 'dropdown',
                                                'itemsList' => [
                                                    2 => 'OPTIONAL',
                                                    1 => 'COMPULSORY',
                                                    0 => 'OFF'
                                                ]
                                            ],
                                            'containerOptions' => [
                                                'class' => 'form-group col-md-3'
                                            ],
                                        ],
                                        'except' => [
                                            'job_id'
                                        ],
                                    ],
                                ],
                                [
                                    'model' => $hiringTeam,
                                    'title' => 'HIRING TEAM',
                                    'description' => 'Choose members of the selection committee',
                                    'formInfoText' => '',
                                    'fieldConfig' => [
                                        'only' => ['employee_ids'],
                                        'employee_ids' => [
                                            'widget' => \softark\duallistbox\DualListbox::className(),
                                            'options' => [
                                                'items' => \yii\helpers\ArrayHelper::map(\app\models\Employee::find()->all(), 'id', 'fullname'),
                                                'clientOptions' => [
                                                    'moveOnSelect' => true,
                                                    'selectedListLabel' => 'Job\'s Hiring Team',
                                                    'nonSelectedListLabel' => 'General Hiring Team',
                                                ],
                                            ],
                                            'containerOptions' => [
                                                'class' => 'form-group col-md-12'
                                            ],

                                        ],
                                    ],

                                ],
                                [
                                    'model' => $question,
                                    'title' => 'ASSESSMENTS',
                                    'description' => 'Define questions to assess candidates',
                                    'formInfoText' => '',
                                    'fieldConfig' => [
                                        'job_id' => [
                                            'options' => [
                                                'type' => 'hidden'
                                            ]
                                        ],
                                        'q1' => [
                                            'widget' => \vova07\imperavi\Widget::className(),
                                            'containerOptions' => [
                                                'class' => 'form-group col-md-12'
                                            ],
                                        ],
                                        'a1' => [
                                            'widget' => \vova07\imperavi\Widget::className(),
                                            'containerOptions' => [
                                                'class' => 'form-group col-md-12'
                                            ],
                                        ],
                                        'q2' => [
                                            'widget' => \vova07\imperavi\Widget::className(),
                                            'containerOptions' => [
                                                'class' => 'form-group col-md-12'
                                            ],
                                        ],
                                        'a2' => [
                                            'widget' => \vova07\imperavi\Widget::className(),
                                            'containerOptions' => [
                                                'class' => 'form-group col-md-12'
                                            ],
                                        ],
                                        'q3' => [
                                            'widget' => \vova07\imperavi\Widget::className(),
                                            'containerOptions' => [
                                                'class' => 'form-group col-md-12'
                                            ],
                                        ],
                                        'a3' => [
                                            'widget' => \vova07\imperavi\Widget::className(),
                                            'containerOptions' => [
                                                'class' => 'form-group col-md-12'
                                            ],
                                        ],
                                        'q4' => [
                                            'widget' => \vova07\imperavi\Widget::className(),
                                            'containerOptions' => [
                                                'class' => 'form-group col-md-12'
                                            ],
                                        ],
                                        'a4' => [
                                            'widget' => \vova07\imperavi\Widget::className(),
                                            'containerOptions' => [
                                                'class' => 'form-group col-md-12'
                                            ],
                                        ],
                                        'q5' => [
                                            'widget' => \vova07\imperavi\Widget::className(),
                                            'containerOptions' => [
                                                'class' => 'form-group col-md-12'
                                            ],
                                        ],
                                        'a5' => [
                                            'widget' => \vova07\imperavi\Widget::className(),
                                            'containerOptions' => [
                                                'class' => 'form-group col-md-12'
                                            ],
                                        ],
                                        'q6' => [
                                            'widget' => \vova07\imperavi\Widget::className(),
                                            'containerOptions' => [
                                                'class' => 'form-group col-md-12'
                                            ],
                                        ],
                                        'a6' => [
                                            'widget' => \vova07\imperavi\Widget::className(),
                                            'containerOptions' => [
                                                'class' => 'form-group col-md-12'
                                            ],
                                        ],
                                        'q7' => [
                                            'widget' => \vova07\imperavi\Widget::className(),
                                            'containerOptions' => [
                                                'class' => 'form-group col-md-12'
                                            ],
                                        ],
                                        'a7' => [
                                            'widget' => \vova07\imperavi\Widget::className(),
                                            'containerOptions' => [
                                                'class' => 'form-group col-md-12'
                                            ],
                                        ],
                                        'q8' => [
                                            'widget' => \vova07\imperavi\Widget::className(),
                                            'containerOptions' => [
                                                'class' => 'form-group col-md-12'
                                            ],
                                        ],
                                        'a8' => [
                                            'widget' => \vova07\imperavi\Widget::className(),
                                            'containerOptions' => [
                                                'class' => 'form-group col-md-12'
                                            ],
                                        ],
                                    ]
                                ],
                            ]
                        ]); ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>