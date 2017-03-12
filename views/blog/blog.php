<?php

/* @var $this yii\web\View */

use yii\helpers\Html;
use yii\helpers\Url;
$this->title = 'Blog';
$this->params['breadcrumbs'][] = $this->title;
?>




<!-- Main Content -->
<div class="container">
    <div class="row">
        <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">
            <?php foreach($posts as $key=>$post): ?>
            <div class="post-preview">

                    <h2 class="post-title">
                        <?= Html::encode($this->title) ?>
                    </h2>
                    <h3 class="post-subtitle">
                        <a href="<?= Url::to(['post/view', 'id' => $post->id]) ?>"><?php echo $post->title; ?></a>

                    </h3>

<!--                <p class="post-meta">Posted by <a href="#">Start Bootstrap</a> on September 24, 2014</p>-->
            </div>
            <hr>
            <?php endforeach; ?>
            <!-- Pager -->
<!--            todo pagination-->
<!--            <ul class="pager">-->
<!--                <li class="next">-->
<!--                    <a href="#">Older Posts &rarr;</a>-->
<!--                </li>-->
<!--            </ul>-->

        </div>
    </div>
</div>








