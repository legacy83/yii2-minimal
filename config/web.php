<?php

$params = require( __DIR__ . '/params.php' );

$config = [
    'id' => 'yii2-minimal',
    'basePath' => dirname( __DIR__ ),
    'bootstrap' => [ 'log' ],
    'components' => [
        'request' => [
            'cookieValidationKey' => 'cookieValidationKey@secret',
        ],
//        'cache' => [
//            'class' => 'yii\caching\FileCache',
//        ],
//        'user' => [
//            'identityClass' => 'app\models\User',
//            'enableAutoLogin' => TRUE,
//        ],
        'errorHandler' => [
            'errorAction' => 'site/error',
        ],
//        'mailer' => [
//            'class' => 'yii\swiftmailer\Mailer',
//            // send all mails to a file by default. You have to set
//            // 'useFileTransport' to false and configure a transport
//            // for the mailer to send real emails.
//            'useFileTransport' => TRUE,
//        ],
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
        /*
        'urlManager' => [
            'enablePrettyUrl' => true,
            'showScriptName' => false,
            'rules' => [
            ],
        ],
        */
    ],
    'params' => $params,
];

if ( YII_ENV_DEV ) {
    // configuration adjustments for 'dev' environment
    $config[ 'bootstrap' ][] = 'debug';
    $config[ 'modules' ][ 'debug' ] = [
        'class' => 'yii\debug\Module',
    ];

    $config[ 'bootstrap' ][] = 'gii';
    $config[ 'modules' ][ 'gii' ] = [
        'class' => 'yii\gii\Module',
    ];
}

return $config;
