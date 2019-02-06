<?php
namespace app\controllers;
use app\models\UserIdentity;
use app\models\UserLoginForm;
use app\models\UserJoinForm;
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
        if(Yii::$app->request->isPost)
            return $this->actionJoinPost();
        $userJoinForm = new UserJoinForm();//создали объект
        $userRecord = new UserRecord();
        $userRecord->setTestUser();
        $userJoinForm->setUserRecord($userRecord);
        return $this->render('join', compact('userJoinForm')); //передаем объект в контроллер
    }
    public function actionJoinPost()//вызывается когда на форму приходят пост данные
    {
        $userJoinForm = new UserJoinForm();
       if($userJoinForm->load(Yii::$app->request->post()));
        if ($userJoinForm->validate())
        {
            $userRecord = new UserRecord();
            $userRecord->setUserJoinForm($userJoinForm);//добавили данные из формы
            $userRecord->save();//сохранили данные
            return $this->redirect('/user/welcome');
        }
        //$userJoinForm->name .= "."; //для проверки что данные передаються
        //return $this->render('join', compact('userJoinForm'));
        return $this->render('join', ['userJoinForm' => $userJoinForm]);//тоже самое что предыдущая запись
    }
    public function actionLogin()
    {
       // $uid = UserIdentity::findIdentity(mt_rand(1, 10)); //находим пользователя в БД
       // Yii::$app->user->login($uid); //логиним конкретного пользователя
        $userLoginForm = new UserLoginForm();
        return $this->render('login', compact('userLoginForm'));
    }
    public function actionWelcome()
    {
        return $this->render('welcome');
    }
    public function  actionLogout()
    {
        Yii::$app->user->Logout(); //user это абстрактный пользователь Yii который умеет заходить и выходить на сайт
        return $this->redirect('/'); //возвращаемся на домашнюю страницу(в корень сайта)
    }
}