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
			['email', 'email'],
            ['email', 'errorIfEmailNotFound']
        ];
    }
    public function errorIfEmailNotFound ()
    {
        $userRecord = UserRecord::findUserByEmail($this->email);//передадим email который пользователь указал
        if($userRecord == null)
            $this->addError('email',
                'Такой email не зарегистрирован');
    }
    public function attributeLabels()//переопределяем метки атрибутов 
    {
        return [
          'email' => \Yii::t('app','Почта'),
          'password' => \Yii::t('app','Пароль')
        ];
    }

    public function login()
    {
        if($this->hasErrors())//если есть ошибка то логинеться не будем
            return;
        $userRecord = UserRecord::findUserByEmail($this->email);
        $userIdentity = UserIdentity::findIdentity($userRecord->id);
        Yii::$app->user->login($userIdentity);
    }
}
