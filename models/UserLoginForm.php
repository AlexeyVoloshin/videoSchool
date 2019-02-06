<?php
namespace app\models;
use yii\base\Model;
use Yii;
class UserLoginForm extends Model
{
    public $email;
    public $password;

    public function rules()//обязательная функция для передачи данных
    {
        return [
            ['email', 'required', 'message' => 'Поле не может быть пустым'],
            ['password', 'required', 'message' => 'Поле не может быть пустым'],
			['email', 'email']
        ];
    }
    public function attributeLabels()//переопределяем метки атрибутов 
    {
        return [
          'email' => \Yii::t('app','Почта'),
          'password' => \Yii::t('app','Пароль')
        ];
    }
}
