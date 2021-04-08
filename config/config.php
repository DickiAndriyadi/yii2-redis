<?php
require_once(__DIR__.'/functions.php');
$config = [
    'id' => 'yii2-redis',
    // the basePath of the application will be the `micro-app` directory
    'basePath' => __DIR__.'/..',
    // this is where the application will find all controllers
    'controllerNamespace' => 'micro\controllers',
    // set an alias to enable autoloading of classes from the 'micro' namespace
    'aliases' => [
        '@micro' => __DIR__.'/..',
    ],
    'components' => [
        'request' => [
            // !!! insert a secret key in the following (if it is empty) - this is required by cookie validation
            'cookieValidationKey' => 'fy7xa7w1dFDmWZA-Ago_0gMhBeTj_Bcw',
        ],
        'urlManager' => [
            'enablePrettyUrl' => true,
            'showScriptName'  => false,
            'rules'=> [
            ]
        ],
        'redis' => [
            'class' => 'yii\redis\Connection',
            'hostname' => 'localhost',
            'port' => 6379,
            'database' => 0,
        ],
    ],
];

return $config;
?>