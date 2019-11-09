<?php
return [
    'aliases' => [
        '@bower' => '@vendor/bower-asset',
        '@npm'   => '@vendor/npm-asset',
    ],
    'vendorPath' => dirname(dirname(__DIR__)) . '/vendor',
    'components' => [
        'cache' => [
            'class' => 'yii\caching\FileCache',
        ],
    ],

    'modules' => [
        'cms' => [ // don`t change module key
            'class' => '@abdualiym\cms\Module',
//            'storageRoot' => $params['staticPath'],
//            'storageHost' => $params['staticHostInfo'],
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
