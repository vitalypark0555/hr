<?php

namespace app\models;

use yii\behaviors\TimestampBehavior;
use yii\db\ActiveRecord;
use yii\db\Expression;
use yii\helpers\Url;
use Yii;

/**
 * This is the model class for table "application_form".
 *
 * @property int $id
 * @property string $first_name
 * @property string $last_name
 * @property string $email
 * @property string $phone
 * @property string $address
 * @property string $photo
 * @property string $title
 * @property int $exp_id
 * @property string $summary
 * @property string $resume
 * @property int $job_id
 * @property int $created_at
 */
class ApplicationForm extends ActiveRecord
{
    public $photoFile;
    public $resumeFile;

    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'application_form';
    }

    public function behaviors()
    {
        return [
            'timestamp' => [
                'class' => TimestampBehavior::className(),
                'attributes' => [
                    ActiveRecord::EVENT_BEFORE_INSERT => 'created_at',
                ],
                'value' => new Expression('NOW()')
            ],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['first_name', 'last_name', 'email', 'phone'], 'required'],
//            ['phone', 'required', 'whenClient' => "function (attribute, model) {
//                return true;
//            }"],
            [['exp_id', 'emp_id', 'job_id', 'created_at'], 'integer'],
            [['photoFile', 'resumeFile'], 'safe'],
            [['photoFile'], 'image', 'skipOnEmpty' => true, 'extensions' => 'png, jpg'],
            [['resumeFile'], 'file', 'skipOnEmpty' => true, 'extensions' => 'pdf, doc, docx'],
            [['summary'], 'string'],
            [['first_name', 'last_name', 'email', 'phone', 'address', 'photo', 'title', 'resume'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'first_name' => 'First Name',
            'last_name' => 'Last Name',
            'email' => 'Email',
            'phone' => 'Phone',
            'address' => 'Address',
            'photo' => 'Photo',
            'title' => 'Job title',
            'exp_id' => 'Experience',
            'summary' => 'Summary',
            'resume' => 'Resume',
            'resumeFile' => 'Resume',
            'photoFile' => 'Photo',
        ];
    }


    public function getEmployment()
    {
        return $this->hasOne(Employment::className(), ['id' => 'emp_id']);
    }

    public function getExperiences()
    {
        return $this->hasMany(ExpForm::className(), ['app_id' => 'id']);
    }

    public function getEducations()
    {
        return $this->hasMany(EduForm::className(), ['app_id' => 'id']);
    }

    public function getJob()
    {
        return $this->hasOne(Job::className(), ['id' => 'job_id']);
    }

    public function uploadFiles()
    {
        $ppath = Url::to('@webroot/uploads/photos/');
        $rpath = Url::to('@webroot/uploads/resumes/');
        if ($this->validate()) {
            if (!empty($this->photoFile)) {
                $photoName = $this->first_name . '_' . $this->last_name . '\'s_' . 'photo' . uniqid() . '.' . $this->photoFile->extension;
                $photoPath = $ppath . $photoName;
                $this->photoFile->saveAs($photoPath);
                $this->photo = $photoName;
                $this->photoFile = null;
            }
            if (!empty($this->resumeFile)) {
                $resumeName = $this->first_name . '_' . $this->last_name . '\'s_' . 'CV' . uniqid() . '.' . $this->resumeFile->extension;
                $resumePath = $rpath . $resumeName;
                $this->resumeFile->saveAs($resumePath);
                $this->resume = $resumeName;
                $this->resumeFile = null;
            }

            return true;
        } else {
            return false;
        }
    }

}
