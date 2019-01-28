<?php 
$I = new AcceptanceTester($scenario);
$I->wantTo('Open the home/join/login pages');
$I->amOnPage('/'); //перейти на страницу
$I->see('Welcome', 'h1'); //что бот должен увидеть для успешного прохождения теста
$I->seeLink('Join', '/user/join');
$I->seeLink('Login', '/user/login');

$I->amOnPage('/user/join');
$I->see('Join us', 'h1');

$I->amOnPage('/user/login');
$I->see('Log in', 'h1');
