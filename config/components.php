<?php 
use yii\web\Request;
$baseUrl = str_replace('/web', '', (new Request)->getBaseUrl());

return [
    'request' => [
        'cookieValidationKey' => 'dsa',
        'baseUrl' => $baseUrl,
    ],
    'cache' => [
        'class' => 'yii\caching\FileCache',
    ],
    'user' => [
        'identityClass' => \dektrium\user\models\User::className(),
        'enableAutoLogin' => true,
    ],
    'authManager' => [
        'class' => 'dektrium\rbac\components\DbManager',
        'defaultRoles' => ['guest'],
    ],
    'errorHandler' => [
        'errorAction' => 'site/error',
    ],
    'mailer' => [
        'class' => 'yii\swiftmailer\Mailer',
        'useFileTransport' => true,
    ],
    'log' => [
        'traceLevel' => YII_DEBUG ? 3 : 0,
        'targets' => [
            [
                'class' => 'yii\log\FileTarget',
                'levels' => ['error', 'warning'],
            ],
        ],
    ],
    'db' => $db,
    'urlManager' => [
        'baseUrl' => $baseUrl,
        'enablePrettyUrl' => true,
        'showScriptName' => false,
        'rules' => [
        ],
    ],
];