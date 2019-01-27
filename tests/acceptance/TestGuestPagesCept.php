<?php 
$I = new AcceptanceTester($scenario);
$I->wantTo('Open the home/join/login pages');
$I->amOnPage('/'); //перейти на страницу
$I->see('Welcome', 'h1'); //что бот должен увидеть для успешного прохождения теста
$I->seeLink('Join', '/site/join');
$I->seeLink('Login', '/site/login');

$I->amOnPage('/site/join');
$I->see('Join us', 'h1');

$I->amOnPage('/site/login');
$I->see('Login in', 'h1');
