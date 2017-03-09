<?php

namespace app\controllers;

use app\models\Comments;
use Yii;
use app\models\Post;
use app\models\PostSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * PostController implements the CRUD actions for Post model.
 */
class PostController extends Controller
{
    public $layout = 'blog';
    /**
     * @inheritdoc
     */
    public function behaviors()
    {
        return [
            'verbs' => [
                'class' => VerbFilter::className(),
                'actions' => [
                    'delete' => ['POST'],
                ],
            ],
        ];
    }


    /**
     * Displays a single Post model.
     * @param integer $id
     * @return mixed
     */
    public function actionView($id)
    {
        $post = $this->findModel($id);
        $comment = $this->newComment($post);
        $comment->post_id = $post->id;
        $comment->date_created = date('Y-m-d H:i:s');//hack todo





        if ($comment->load(Yii::$app->request->post() ) && $comment->save()) {
            return $this->redirect(['view', 'id' => $id]);
        }


        return $this->render('view', [
            'model' => $post,
            'comment' => $comment
        ]);
    }

    protected function newComment($post)
    {
        $comment = new Comments();
        if(isset($_POST['Comment']))
        {
            $post->addComment($comment);
            $comment->post_id = $post->id;

        }
        return $comment;
    }



    /**
     * Finds the Post model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return Post the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = Post::findOne($id)) !== null) {
            return $model;
        } else {
            throw new NotFoundHttpException('The requested page does not exist.');
        }
    }
}
