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



<header class="intro-header" style="background-image: url('../img/post-bg.jpg')">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">
                <div class="post-heading">
                    <h1><?= Html::encode($this->title) ?></h1>
                </div>
            </div>
        </div>
    </div>
</header>

<!-- Post Content -->
<article>
    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">

            </div>
        </div>
    </div>
</article>

<hr>





<div class="post-view">



    <p>
        <?= Html::a('Update', ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
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
        ],
    ]) ?>

</div>

<div id="comments">
    <?php if(sizeof($model->getComments())>0): ?>


        <div class="comment-create">


            <div class="post-form">

                <?php $form = ActiveForm::begin(); ?>
                <?= $form->field($comment, 'name')->textInput(['maxlength' => true]) ?>
                <?= $form->field($comment, 'email')->textInput(['maxlength' => true]) ?>
                <?= $form->field($comment, 'content')->textarea(['rows' => 6]) ?>
                <div class="form-group">
                    <?= Html::submitButton($comment->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
                </div>

                <?php ActiveForm::end(); ?>

            </div>
        </div>


    <?php endif; ?>
</div>