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
           $faker = \Faker\Factory::create();
           $this->name = $faker->name;
           $this->email = $faker->email;
           $this->passhash = $faker->password;
           $this->status = $faker->randomDigit;
       }
       public static function existsEmail ($email)
       {
           $count = static::find()->where(['email' => $email])->count();//проверяем условие, если количество записей равно 0 то выполним просто return(выход)
           return $count > 0;
       }
   }
