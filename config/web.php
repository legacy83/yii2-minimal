<?php

return [

    'id' => 'yii2-minimal',
    'basePath' => dirname( __DIR__ ),
    'bootstrap' => [ 'log' ],

    'components' => [

        'request' => [
            'cookieValidationKey' => 'W8p?(G4k32p@S5M',
        ],

        'errorHandler' => [
            'errorAction' => 'site/error',
        ],

        'log' => [
            'traceLevel' => YII_DEBUG ? 3 : 0,
            'targets' => [
                [
                    'class' => 'yii\log\FileTarget',
                    'levels' => [ 'error', 'warning' ],
                ],
            ],
        ],

        'db' => require( __DIR__ . '/db.php' ),

        'urlManager' => [
            'enablePrettyUrl' => TRUE,
            'showScriptName' => FALSE,
            'rules' => [
                '<alias:\w+>' => 'site/<alias>',
            ],
        ],

    ],

    'params' => require( __DIR__ . '/params.php' ),

];