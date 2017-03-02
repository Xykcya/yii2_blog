<?php
namespace app\commands;

use Yii;
use yii\console\Controller;

class RbacController extends Controller
{
    public function actionInit()
    {
        $auth = Yii::$app->authManager;

        $adminPermission = $auth->createPermission('admin');
        $adminPermission->description = 'admin permission';
        $auth->add($adminPermission);



        $admin = $auth->createRole('admin');
        $auth->add($admin);


        // Assign roles to users. 1 and 2 are IDs returned by IdentityInterface::getId()
        // usually implemented in your User model.
        $auth->assign($admin, 1);
    }
}