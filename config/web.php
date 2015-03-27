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

        'response' => [
            'formatters' => [
                'yaml' => [
                    'class' => 'app\utilities\YamlResponseFormatter'
                ]
            ]
        ],

        'user' => [
            'identityClass' => 'app\models\user\UserRecord'
        ],

        'urlManager' => [
            'enablePrettyUrl' => true,
            'showScriptName' => false
        ],

        'db' => require(__DIR__ . '/db.php'),

        'view' => [
            'renderers' => [
                'md' => [
                    'class' => 'app\utilities\MarkdownRenderer'
                ]
            ],
            'theme' => [
                'class' => \yii\base\Theme::className(),
                'basePath' => '@app/themes/snowy',
            ]
        ],

    ],

    'bootstrap' => ['debug'],

    'modules' => [
        'gii'   => [
            'class' => 'yii\gii\Module',
            'allowedIPs' => ['127.0.0.1'],
        ],
        'debug' => 'yii\debug\Module',
        'api'   => 'app\api\ApiModule'
    ],

    'extensions' => require(__DIR__ . '/../vendor/yiisoft/extensions.php')
];
