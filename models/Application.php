<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "application".
 *
 * @property int $id
 * @property int $job_id
 * @property int $name
 * @property int $email
 * @property int $phone
 * @property int $address
 * @property int $photo
 * @property int $title
 * @property int $education
 * @property int $experience
 * @property int $summary
 * @property int $resume
 */
class Application extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'application';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['name', 'email', 'phone', 'address', 'photo', 'title', 'education', 'experience', 'summary', 'resume'], 'required'],
            [['job_id', 'name', 'email', 'phone', 'address', 'photo', 'title', 'education', 'experience', 'summary', 'resume'], 'integer'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'job_id' => 'Job',
            'name' => 'Name',
            'email' => 'Email',
            'phone' => 'Phone',
            'address' => 'Address',
            'photo' => 'Photo',
            'title' => 'Title',
            'education' => 'Education',
            'experience' => 'Experience',
            'summary' => 'Summary',
            'resume' => 'Resume',
        ];
    }
}
