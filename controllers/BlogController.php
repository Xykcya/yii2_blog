<?php

namespace app\controllers;

use app\models\Post;
use Yii;
use yii\filters\AccessControl;
use yii\web\Controller;
use yii\filters\VerbFilter;
use app\models\LoginForm;
use app\models\ContactForm;

class BlogController extends Controller
{
    public $layout = 'blog';

    public function actionIndex()
    {
        $posts = array();

        $post = new Post();

        var_dump($post->attributes() );

        $post->content = 'content'.date('H:i:s');
        $post->date_created = date('Y-m-d H:i:s');
        $post->date_modified = date('Y-m-d H:i:s');
        $post->save();

        var_dump($post);
//        print_r($post);

        exit();

//        echo 'index';
//
//        exit();
        return $this->render('blog', ['posts' => $posts]);
    }

    public function actionPost($id)
    {
        echo 'post';exit();
    }
}
