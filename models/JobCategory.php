<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "job_category".
 *
 * @property int $id
 * @property string $name
 * @property string $icon
 */
class JobCategory extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'job_category';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['name'], 'required'],
            [['name'], 'string', 'max' => 255],
            [['icon'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => Yii::t('job', 'ID'),
            'name' => Yii::t('job', 'Name'),
            'icon' => Yii::t('job', 'Icon'),
        ];
    }
}
