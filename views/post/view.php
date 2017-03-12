<?php

use yii\helpers\Html;
use yii\widgets\DetailView;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Post */

$this->title = $model->title;
$this->params['breadcrumbs'][] = ['label' => 'Posts', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>



<!-- Post Content -->
<article>
    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">







<div class="post-view">


    <h1><?= Html::encode($model->title) ?></h1>

    <p><?= Html::encode($model->lead_text) ?></p>
    <p><?= Html::encode($model->content) ?></p>


<!--

 todo
  'id',
            'title',
            'slug',
            'lead_photo',
            'lead_text:ntext',
            'content:ntext',
            'meta_description',
            'date_created',
            'date_modified',
            'created_by',
            'updated_by',
            'category_id',
 -->

</div>


                <div id="comments">

<!--                    --><?php //var_dump($arrComments); ?>

                    <div class="row">
                        <div class="col-md-8">
                            <h2>Comments</h2>
                    <?php foreach($arrComments AS $key => $row ): ?>

                            <div class="comments-list">
                                <div class="media">
                                    <hr/>
                                    <p class="pull-right"><small><?= $row->date_created ?></small></p>
                                    <a class="media-left" href="#">
                                        <img  src="/avatar.jpg" >
                                    </a>
                                    <div class="media-body">
                                        <h4 class="media-heading user_name"><?= $row->name ?></h4>
                                        <?= $row->content ?>
                                    </div>
                                </div>
                            </div>

                    <?php endforeach; ?>
                        </div>
                    </div>


                    <div class="comment-create">


                        <div class="post-form">

                            <?php $form = ActiveForm::begin(); ?>
                            <?= $form->field($newComment, 'name')->textInput(['maxlength' => true]) ?>
                            <?= $form->field($newComment, 'email')->textInput(['maxlength' => true]) ?>
                            <?= $form->field($newComment, 'content')->textarea(['rows' => 6]) ?>
                            <div class="form-group">
                                <?= Html::submitButton($newComment->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
                            </div>

                            <?php ActiveForm::end(); ?>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</article>

<hr>
