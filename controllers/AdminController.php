<?php

namespace app\controllers;

use app\models\Post;
use Yii;
use yii\data\Pagination;

use yii\web\Controller;


class AdminController extends Controller
{

    //todo ограничить доступ к этому контроллеру всем кроме админов

    public function actionIndex()
    {



        return $this->render('index');
    }

    public function beforeControllerAction($controller, $action)
    {
        if (parent::beforeControllerAction($controller, $action)) {
            if (!\Yii::$app->user->can('admin')) {
                {
                    Yii::app()->request->redirect(Yii::app()->homeUrl);
                }
                return true;
            } else
                return false;
        }
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
