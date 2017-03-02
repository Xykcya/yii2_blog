<?php

namespace app\controllers;

use app\models\Post;
use Yii;
use yii\data\Pagination;

use yii\web\Controller;


class AdminController extends Controller
{

    //todo ограничить доступ к этому контроллеру всем кроме админов

    public function actionIndex()//todo pagination
    {

        if (\Yii::$app->user->can('admin')) {

        }
        return $this->render('index');
    }

    public function actionUsersList(){

    }

    public function actionUserEdit(){

    }

    public function actionUserUpdate(){

    }

    public function actionPostEdit(){

    }

    public function actionPostCreate(){

    }

    public function actionPostUpdate(){

    }


}
