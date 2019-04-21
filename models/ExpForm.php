<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "expform".
 *
 * @property int $id
 * @property string $company
 * @property string $industry
 * @property string $title
 * @property string $summary
 * @property int $app_id
 * @property string $start_date
 * @property string $end_date
 * @property int $currently
 * @property ApplicationForm $app
 */
class ExpForm extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'expform';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id', 'app_id', 'start_date', 'company', 'industry', 'title'], 'required'],
            [['id', 'app_id'], 'integer'],
            [['start_date', 'end_date'], 'date', 'format'=>'dd-MM-yyyy'],
            [['currently'], 'safe'],
            [['summary'], 'string'],
            [['company', 'industry', 'title'], 'string', 'max' => 255],
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
            'company' => 'Company',
            'industry' => 'Industry',
            'title' => 'Title',
            'summary' => 'Summary',
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
