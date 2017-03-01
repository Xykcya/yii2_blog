<?php

/* @var $this yii\web\View */

use yii\helpers\Html;
use yii\helpers\Url;
$this->title = 'Blog';
$this->params['breadcrumbs'][] = $this->title;

echo 'posts sizeof:'.sizeof($posts);
?>

<div class="blog">
    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        This is the Blog page.
        Below me be placed lastest posts
    </p>

    <?php foreach($posts as $key=>$post): ?>
        <h2><a href="<?= Url::to(['post/view', 'id' => $post->id]) ?>"><?php echo $post->header; ?></a></h2>
    <?php endforeach; ?>

</div>
