<?php

namespace app\models;
use http\Message;
use yii\base\Model;

class UserJoinForm extends Model
    {
        public $name;
        public $email;
        public $password;
        public $password2;

        public function rules() //выполняет валидацию формы
        {

            return [

                ['name', 'required', 'message' => 'Имя пользователя не может быть пустым'],//проверяет поля ввода на наличие введеных данных
                ['email', 'required'],
                ['password', 'required'],
                ['password2', 'required'],
                ['name', 'string', 'min' =>3, 'max' =>30, 'message' => 'имя сильно короткое'],//параметр max, min задает диапазон длинны имени
                ['email', 'email', 'message' => 'Адрес эл. почты указан не верно'], //параметр massage помогает изменить стандартное сообщение
                ['password', 'string', 'min' => 4],
                ['password2', 'compare', 'compareAttribute' => 'password']//правило сравнения compare, которое содержит атрибут сравнивания compareAttribute
            ];
        }

        public function setUserRecord ($userRecord)
        {
            $this->name = $userRecord->name;
            $this->email = $userRecord->email;
            $this->password = $this->password2 = "qwas";
        }
    }