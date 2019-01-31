<?php
namespace app\controllers;
use app\models\UserRecord;
use yii\web\Controller;

class UserController extends Controller
{
    public function actionJoin()
    {

        $userRecord = new UserRecord();

        $userRecord->setTestUser();

        $userRecord->save();//вызывает запрос к БД который встроен в фреймворк и запишет данный model в таблицу

        return $this->render('join');
    }
    public function actionLogin()
    {
        return $this->render('login');
    }
}