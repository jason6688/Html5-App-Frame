<?php

$params = require __DIR__ . '/params.php';
$db = require __DIR__ . '/db.php';

$config = [
    'id' => 'basic',
    'basePath' => dirname(__DIR__),
    'bootstrap' => ['log'],
    'aliases' => [
        '@bower' => '@vendor/bower-asset',
        '@npm' => '@vendor/npm-asset',
    ],
    'components' => [
        'request' => [
            // !!! insert a secret key in the following (if it is empty) - this is required by cookie validation
            'cookieValidationKey' => 'sJ__qhB7bte4yiUHx2z1dvwiedNhiz9d',
        ],
        'cache' => [
            'class' => 'yii\caching\FileCache',
        ],
        'user' => [
            'identityClass' => 'app\models\User',
            'enableAutoLogin' => true,
        ],
        'errorHandler' => [
            'errorAction' => 'site/error',
        ],
        'mailer' => [
            'class' => 'yii\swiftmailer\Mailer',
            // send all mails to a file by default. You have to set
            // 'useFileTransport' to false and configure a transport
            // for the mailer to send real emails.
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

        'view' => [
            'theme' => [
                'pathMap' => [
                    '@app/views' => '@vendor/myzero1/yii2-theme-layui/src/views', // using the layui theme
                ],
            ],
        ],
        'assetManager' => [
            'class' => 'yii\web\AssetManager',
            'forceCopy' => false,
            // 'linkAssets' => true,//link to assets,no cache.used in develop.
            'bundles' => [
                'myzero1\layui\assets\php\components\LayoutAsset' => [
                     'copyright' => '<p><span>copyright @2019-2099 史亚运</span></p>', // false
                    // 'copyright' => false
                    'noticeUrl' => '/gii',
                    // 'noticeUrl' => false,
                ],
            ],

        ],


        'urlManager' => [
            'enablePrettyUrl' => true,
            'showScriptName' => false,
            'rules' => [
            ],
        ],

    ],

    'params' => $params,


    'layout' => 'main',// to set theme by setting layout and layoutPath
    //'layoutPath' => \Yii::getAlias('@vendor/myzero1/yii2-theme-layui/src/views/layouts'),
    'layoutPath' => '@vendor/myzero1/yii2-theme-layui/src/views/layouts',
];

if (YII_ENV_DEV) {
    // configuration adjustments for 'dev' environment
    $config['bootstrap'][] = 'debug';
    $config['modules']['debug'] = [
        'class' => 'yii\debug\Module',
        // uncomment the following to add your IP if you are not connecting from localhost.
        //'allowedIPs' => ['127.0.0.1', '::1'],
    ];

    $config['bootstrap'][] = 'gii';
    $config['modules']['gii'] = [
        'class' => 'yii\gii\Module',
        // uncomment the following to add your IP if you are not connecting from localhost.
        'allowedIPs' => ['127.0.0.1', '::1'],
        'generators' => [
            'z1layui_crud' => [ // generator name
                'class' => 'myzero1\layui\gii\templates\crud\Generator', // generator class
                'templates' => [
                    'default' => '@vendor/myzero1/yii2-theme-layui/src/gii/templates/crud/layui',
                ]
            ],
        ],
    ];
}

return $config;
