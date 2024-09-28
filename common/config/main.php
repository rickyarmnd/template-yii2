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
