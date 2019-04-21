<?php

namespace app\models;

use Yii;
use yii\helpers\Html;

/**
 * This is the model class for table "job".
 *
 * @property int $id
 * @property string $title
 * @property int $cat_id
 * @property int $dept_id
 * @property int $emp_id
 * @property int $edu_id
 * @property int $exp_id
 * @property double $salary_from
 * @property double $salary_to
 * @property int $cur_id
 * @property string $description
 * @property string $requirements
 * @property string $benefits
 * @property int $country_id
 * @property string $address
 * @property string $city
 * @property int $status
 *
 */
class Job extends \yii\db\ActiveRecord
{
    public $hiring_team = [];

    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'job';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['title', 'country_id', 'city', 'address', 'cat_id', 'company'], 'required'],
            [['cat_id', 'dept_id', 'emp_id', 'edu_id', 'exp_id', 'cur_id', 'country_id', 'status'], 'integer'],
            [['salary_from', 'salary_to'], 'number'],
            [['description', 'requirements', 'benefits'], 'string'],
            [['title'], 'string', 'max' => 100],
            [['company', 'address', 'city'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'title' => 'Job Title',
            'dept_id' => 'Department',
            'emp_id' => 'Employment Type',
            'edu_id' => 'Education',
            'exp_id' => 'Experience',
            'salary_from' => 'Salary From',
            'salary_to' => 'Salary To',
            'cur_id' => 'Currency',
            'description' => 'Description',
            'requirements' => 'Requirements',
            'benefits' => 'Benefits',
            'country_id' => 'Country',
            'city' => 'City',
            'address' => 'Address',
            'status' => 'Status',
            'cat_id' => 'Category',
            'company' => 'Company',
        ];
    }

    public function getCountry()
    {
        return $this->hasOne(Country::className(), ['id' => 'country_id']);
    }

    public function getDepartment()
    {
        return $this->hasOne(Department::className(), ['id' => 'dept_id']);
    }

    public function getCurrency()
    {
        return $this->hasOne(Currency::className(), ['id' => 'cur_id']);
    }

    public function getEducation()
    {
        return $this->hasOne(Education::className(), ['id' => 'edu_id']);
    }

    public function getEmployment()
    {
        return $this->hasOne(Employment::className(), ['id' => 'emp_id']);
    }

    public function getExperience()
    {
        return $this->hasOne(Experience::className(), ['id' => 'exp_id']);
    }

    public function getApplicationForms()
    {
        return $this->hasMany(ApplicationForm::className(), ['job_id' => 'id']);
    }
}
