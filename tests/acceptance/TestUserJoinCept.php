<?php
use Step\Acceptance\TestUserJoin;

$I = new TestUserJoin($scenario);
$I->wantTo('New users join and login');

$user1 = $I->imagineUser();//придумать имя пользователя
$user2 = $I->imagineUser();

$I->loginUser($user1);
$I->see("This e-mail does not registered");

$I->joinUser($user1);//регистрация пользователя
$I->joinUser($user2);

$I->joinUser($user1);//проверяем был ли этот пользователь зарегестрирован ранее
$I->see("This e-mail alredy exists");

$I->loginUser($user1);//выплняем вход пользователя
$I->isUserLogged($user1);//проверяем залогинен ли первый пользователь
$I->noUserLogged($user2);//проверяем не залогинен ли второй пользователь

$I->logoutUser();//выход из системы

$I->loginUser($user2);//выплняем вход пользователя
$I->isUserLogged($user2);//проверяем залогинен ли первый пользователь
$I->noUserLogged($user1);//проверяем не залогинен ли второй пользователь

$I->logoutUser();//выход из системы

$user1["password"] = "wrong password";
$I->loginUser($user1);
$I->see("Wrong password");