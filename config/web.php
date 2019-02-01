<?php

    return [
        'id' => 'school',
        'basePath' => realpath(__DIR__ . '/../'),
        'bootstrap' => [
            'debug'
        ],
        'components' => [
            'urlManager' => [
                'enablePrettyUrl' => true, //включить красивые url адреса
                'showScriptName' => false
            ],
            'request' => [
                'cookieValidationKey' => 'secret code'
            ],
            'db' => require (__DIR__ . '/db.php'),//подключение к БД
            'user' => [//идентификация пользователя
                'identityClass' => 'app\models\UserIdentity'
            ]
        ],
        'modules' => [
            'debug' => [
                'class' => 'yii\debug\Module',
                ],
        ],
    ];
?>