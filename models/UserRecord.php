<?php

   namespace app\models;
   use yii\db\ActiveRecord;

   //Active Record подключаеться к таблице, считывает и загружает структуру таблицы
   class UserRecord extends ActiveRecord
   {
        //перечеслять названия столбцов не надо
       public static function tableName ()
       {
          return "user";  //воозвращаем название таблицы
       }

       public function setTestUser()
       {
           $this->name = "Alex";
           $this->email = "alex@mail.ru";
           $this->passhash = "dfsfsdfdsf23sdgdfg080dfgkjljfdglkjlj";
           $this->status = 2;
       }
   }
