<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "users".
 *
 * @property string $id
 * @property string $login
 * @property string $password
 * @property string $name
 * @property string $surname
 * @property string $sex
 * @property string $date
 * @property string $email
 */
class Users extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'users';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['sex'], 'string'],
            [['login', 'name'], 'string', 'max' => 30],
            [['password'], 'string', 'max' => 70],
            [['surname'], 'string', 'max' => 40],
            [['email'], 'string', 'max' => 50],
            [['login'], 'unique'],
            [['email'], 'unique'],
            [['email'], 'email'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'login' => 'Login',
            'password' => 'Password',
            'name' => 'Name',
            'surname' => 'Surname',
            'sex' => 'Sex',
            'date' => 'Date',
            'email' => 'Email',
        ];
    }

    public function getAddresses()
    {
        return $this->hasMany(Addresses::className(), ['user_id' => 'id']);
    }
}
