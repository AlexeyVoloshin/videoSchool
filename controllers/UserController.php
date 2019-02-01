<?php
namespace app\controllers;
use app\models\UserIdentity;
use app\models\UserRecord;
use yii\web\Controller;
use yii;
class UserController extends Controller
{
    public function actionJoin()
    {

//        $userRecord = new UserRecord();
//
//        $userRecord->setTestUser();
//
//        $userRecord->save();//вызывает запрос к БД который встроен в фреймворк и запишет данный model в таблицу

        return $this->render('join');
    }
    public function actionLogin()
    {
        $uid = UserIdentity::findIdentity(mt_rand(1, 10)); //находим его в БД
        Yii::$app->user->login($uid); //логиним конкретного пользователя
        return $this->render('login');
    }
}