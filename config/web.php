<?php
/**
 * Created by PhpStorm.
 * User: TimmyKsu
 * Date: 04.01.2015
 * Time: 23:50
 */
?>
<?php
return [
    'id' => 'crmapp',

    'basePath' => realpath(__DIR__ . '/../'),

    'components' => [
        'request' => [
            'enableCsrfValidation' => false,
        ],
        'urlManager' => [
            'enablePrettyUrl' => true,
            'showScriptName' => false
        ],
        'db' => require(__DIR__ . '/db.php'),
    ],

    'bootstrap' => ['debug'],

    'modules' => [
        'gii'   => [
            'class' => 'yii\gii\Module',
            'allowedIPs' => ['127.0.0.1'],
        ],
        'debug' => 'yii\debug\Module',
    ],

    'extensions' => require(__DIR__ . '/../vendor/yiisoft/extensions.php')
];