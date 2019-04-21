<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "eduform".
 *
 * @property int $id
 * @property string $institution
 * @property string $specialization
 * @property int $degree_id
 * @property int $edu_id
 * @property int $app_id
 * @property string $start_date
 * @property string $end_date
 * @property int $currently
 * @property ApplicationForm $app
 */
class EduForm extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'eduform';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['institution', 'specialization', 'app_id', 'start_date'], 'required'],
            [['degree_id', 'app_id', 'edu_id'], 'integer'],

            [['start_date', 'end_date', 'currently'], 'safe'],
            [['start_date', 'end_date'], 'date', 'format'=>'dd-MM-yyyy'],
            [['institution', 'specialization'], 'string', 'max' => 255],
            [['app_id'], 'exist', 'skipOnError' => true, 'targetClass' => ApplicationForm::className(), 'targetAttribute' => ['app_id' => 'id']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'institution' => 'Institution',
            'specialization' => 'Specialization',
            'degree_id' => 'Degree',
            'edu_id' => 'Education Type',
            'app_id' => 'App ID',
            'start_date' => 'Start Date',
            'end_date' => 'End Date',
            'currently' => 'Currently'
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getApp()
    {
        return $this->hasOne(ApplicationForm::className(), ['id' => 'app_id']);
    }
}
