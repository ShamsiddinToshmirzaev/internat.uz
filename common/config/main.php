<?php

$params = array_merge(
    require __DIR__ . '/params.php',
    require __DIR__ . '/params-local.php'
);
return [
    'aliases' => [
        '@bower' => '@vendor/bower-asset',
        '@npm' => '@vendor/npm-asset',
        '@url' => $params['siteUrl'],
        '@storageRoot' => $params['staticPath'],
        '@storageHostInfo' => $params['storageHostInfo'],
    ],
    'timezone' => 'Asia/Tashkent',
    'language' => 'ru',
    'sourceLanguage' => 'en',
    'vendorPath' => dirname(dirname(__DIR__)) . '/vendor',
    'components' => [
        'cache' => [
            'class' => 'yii\caching\FileCache',
        ],
//        For language
        'i18n' => [
            'translations' => [
                'app*' => [
                    'class' => 'yii\i18n\PhpMessageSource',
                    'basePath' => '@common/messages',
                    'fileMap' => [
                        'app' => 'app.php',
                        'app/error' => 'error.php',
                    ],
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

    'modules' => [
        'cms' => [ // don`t change module key
            'class' => \abdualiym\cms\Module::class,
            'storageRoot' => '@storageRoot',
            'storageHost' => '@storageHostInfo',
            'thumbs' => [ // 'sm' and 'md' keys are reserved
                'admin' => ['width' => 128, 'height' => 128],
                'thumb' => ['width' => 320, 'height' => 320],
            ],
            'languages' => [
                0 => 'Русский', // default language
                1 => 'English',
                2 => 'O`zbek tili',
            ]
        ],
    ],
];