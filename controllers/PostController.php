<?php

namespace app\controllers;

use app\models\Post;
use yii\web\Controller;

class PostController extends Controller
{
    public function actionView($id)//todo pagination
    {

        $Post = Post::find()
            ->where(['id' => $id])
            ->limit(1)
            ->one();

        return $this->render('post', ['Post' => $Post]);
    }

}
