<?php

namespace app\models;

use speedweb\core\model\FormModel;

class Users extends FormModel
{

    public int $id = 0;
    public string $username = '';
    public string $password = '';
    public string $passwordConfirm = '';

    public static function tableName(): string
    {
        return "users";
    }

    public function attributes()
    {
        return ['username', 'password'];
    }

    public function labels()
    {
        return [
            'username' => 'Kullanıcı Adı',
            'password' => 'Şifre',
            'passwordConfirm' => 'Şifre Tekrar'
        ];
    }

    public function rules()
    {
        return [
            'username' => [self::RULE_REQUIRED, [
                self::RULE_UNIQUE, 'class' => self::class
            ]],
            'password' => [self::RULE_REQUIRED],
            'passwordConfirm' => [self::RULE_REQUIRED, self::RULE_MATCH => 'password']
        ];
    }

    public function save()
    {
        $this->password = password_hash($this->password, PASSWORD_DEFAULT);
        return parent::save();
    }
}