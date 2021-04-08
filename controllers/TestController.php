<?php

namespace micro\controllers;

use yii\web\Controller;
use yii\web\Request;
use Yii;

class TestController extends Controller
{
    public function actionIndex()
    {
        $post_data = json_decode(file_get_contents('php://input'), true);
        $data_post = json_encode($post_data);
        Yii::$app->redis->set('insert', $data_post);

        return Yii::$app->redis->get('insert');

    }

    public function actionDetail()
    {
        return Yii::$app->redis->get('insert');
    }

    public function actionDelete()
    {
        return Yii::$app->redis->del('insert');
    }
}