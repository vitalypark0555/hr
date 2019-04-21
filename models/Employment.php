<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "employment".
 *
 * @property int $id
 * @property string $employment
 */
class Employment extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'employment';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['employment'], 'required'],
            [['employment'], 'string', 'max' => 45],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'employment' => 'Employment',
        ];
    }
}
