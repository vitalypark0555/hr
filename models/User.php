<?php

namespace app\models;

use Yii;
use yii\base\NotSupportedException;
use yii\web\IdentityInterface;

/**
 * This is the model class for table "user".
 *
 * @property int $id
 * @property string $first_name
 * @property string $last_name
 * @property string $username
 * @property string $password
 * @property string $auth_key
 * @property string $image
 */
class User extends \yii\db\ActiveRecord implements IdentityInterface
{
    public $hashPassword = true;
    public $repassword = '';

    public static function create($first_name, $last_name, $username, $password)
    {
        $user = new static();
        $user->first_name = $first_name;
        $user->last_name = $last_name;
        $user->username = $username;
        $user->password = $password;
        return $user;
    }

    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'user';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['first_name', 'last_name', 'email', 'username', 'password'], 'required'],
            [['first_name', 'last_name', 'username'], 'string', 'max' => 45],
            ['email', 'email'],
            [['email', 'username'], 'unique'],
            [['password', 'repassword', 'auth_key', 'email'], 'string', 'max' => 255],
            [['image'], 'file', 'extensions' => 'jpg,png']
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'first_name' => Yii::t('post', 'First Name'),
            'last_name' => Yii::t('post', 'Last Name'),
            'username' => Yii::t('post', 'Username'),
            'password' => Yii::t('post', 'Password'),
            'repassword' => Yii::t('post', 'Retype Password')
        ];
    }

    public static function findIdentity($id)
    {
        return static::findOne($id);
    }

    public static function findByUsername($username)
    {
        return static::findOne(['username' => $username]);
    }


    public static function findIdentityByAccessToken($token, $type = null)
    {
        throw new NotSupportedException('"findIdentityByAccessToken" is not implemented.');
    }

    public function getId()
    {
        return $this->id;
    }


    public function getAuthKey()
    {
        return $this->auth_key;
    }

    public function validateAuthKey($authKey)
    {
        return $this->getAuthKey() === $authKey;
    }

    public function validatePassword($password)
    {
        return \Yii::$app->security->validatePassword($password, $this->password);
    }

    public function beforeSave($insert)
    {
        if (parent::beforeSave($insert)) {
            if ($this->hashPassword) {
                $this->password = \Yii::$app->security->generatePasswordHash($this->password, 10);
            }
            return true;
        } else {
            return false;
        }
    }

    public function getFullName()
    {
        return $this->first_name . ' ' . $this->last_name;
    }

    public function getFirstName()
    {
        return $this->first_name;
    }

    public function getUsername()
    {
        return $this->username;
    }



    public function getImage()
    {
        return ($this->image) ? '/uploads/' . $this->image : '/no-image.png';
    }

}
