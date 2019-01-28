<?php

return [
    'id' => 'school',
    'basePath' => realpath(__DIR__ . '/../'),
    'components' => [
        'urlManager' => [
            'enablePrettyUrl' => true, //включить красивые url адреса
            'showScriptName' => false
        ]
    ]
];
