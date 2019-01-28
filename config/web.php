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
        ],
        'modules' => [
            'debug' => [
                'class' => 'yii\debug\Module',
                'traceLine' => '<a href="phpstorm://open?url={file}&line={line}">{file}:{line}</a>',
                ],
        ],
    ];
?>