<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "degree".
 *
 * @property int $id
 * @property string $degree
 */
class Degree extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'degree';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['degree'], 'required'],
            [['degree'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'degree' => 'Degree',
        ];
    }
}
