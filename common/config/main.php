<?php
return [
    'language' => 'id-ID',
    'timeZone' => 'Asia/Jakarta',
    'aliases' => [
        '@bower' => '@vendor/bower-asset',
        '@npm'   => '@vendor/npm-asset',
    ],
    'vendorPath' => dirname(dirname(__DIR__)) . '/vendor',
    'components' => [
        'cache' => [
            'class' => \yii\caching\FileCache::class,
        ],
        'authManager' => [
            'class' => 'yii\rbac\DbManager', // only support DbManager
        ],
        'assetManager' => [
            'bundles' => [
                'yii\bootstrap\BootstrapAsset' => 'yii\bootstrap5\BootstrapAsset',
                'yii\bootstrap\BootstrapPluginAsset' => 'yii\bootstrap5\BootstrapPluginAsset',
        
                // 'yii\web\JqueryAsset' => [
                //     'js' => []
                // ],
                // 'yii\bootstrap5\BootstrapPluginAsset' => [
                //     'js' => []
                // ],
                // 'yii\bootstrap5\BootstrapAsset' => [
                //     'css' => []
                // ],
                // 'yii\bootstrap4\BootstrapPluginAsset' => [
                //     'js' => []
                // ],
                // 'yii\bootstrap4\BootstrapAsset' => [
                //     'css' => []
                // ],
                // 'kartik\form\ActiveFormAsset' => [
                //     'bsDependencyEnabled' => false // do not load bootstrap assets for a specific asset bundle
                // ],
            ],
            'appendTimestamp' => true
        ],
        'formatter' => [
            'class' => 'yii\i18n\Formatter',
            'thousandSeparator' => '.',
            'decimalSeparator' => ',',
            // 'currencyCode' => 'Rp ',
            'defaultTimeZone' => 'UTC',
            'dateFormat' => 'php:d-m-Y',
            'datetimeFormat' => 'php:d-M-Y H:i:s',
            'timeZone' => 'Asia/Jakarta',
            'nullDisplay' => '-',
            'numberFormatterOptions' => [
                NumberFormatter::MIN_FRACTION_DIGITS => 0,
            ],
            'numberFormatterSymbols' => [
                NumberFormatter::CURRENCY_SYMBOL => 'Rp',
            ]
        ],
        'i18n' => [
            'translations' => [
                'yii2-ajaxcrud' => [
                    'class' => 'yii\i18n\PhpMessageSource',
                    'basePath' => '@yii2ajaxcrud/ajaxcrud/messages',
                    'sourceLanguage' => 'id',
                ],
            ]
        ],
    ],
    'modules' => [
        'gii' => [
            'class' => 'yii\gii\Module',
            'generators' => [
                'crud'   => [
                    'class' => 'common\generators\Generator',
                ]
            ]
        ],
        'gridview' =>  [
            'class' => '\kartik\grid\Module'
        ],
    ],
];
