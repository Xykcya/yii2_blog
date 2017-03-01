<?php

namespace app\controllers;

use app\models\Post;
use Yii;
use yii\data\Pagination;
use yii\filters\AccessControl;
use yii\web\Controller;
use yii\filters\VerbFilter;
use app\models\LoginForm;
use app\models\ContactForm;

class BlogController extends Controller
{
//    public $layout = 'site';

    public function actionIndex()//todo pagination
    {
        $posts = array();


        $query = Post::find()->where(['display' => 1]);
        $count = $query->count();
        $pagination = new Pagination(['totalCount' => $count]);
        $pagination->setPageSize(3);
        $posts = $query->offset($pagination->offset)
            ->limit($pagination->limit)
            ->all();



        return $this->render('blog', ['posts' => $posts]);
    }



}
