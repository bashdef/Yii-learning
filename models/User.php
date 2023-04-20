<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "user".
 *
 * @property int $id
 * @property string $fio
 * @property string $email
 * @property string $login
 * @property string $password
 * @property string $image
 * @property int $role
 */
class User extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'user';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['fio', 'email', 'login', 'password', 'image', 'role'], 'required'],
            [['role'], 'integer'],
            [['fio', 'email', 'login'], 'string', 'max' => 50],
            [['password'], 'string', 'max' => 150],
            [['image'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'fio' => 'Fio',
            'email' => 'Email',
            'login' => 'Login',
            'password' => 'Password',
            'image' => 'Image',
            'role' => 'Role',
        ];
    }
}
