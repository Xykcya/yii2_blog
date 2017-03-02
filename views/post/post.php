<?php

/* @var $this yii\web\View */

use yii\helpers\Html;

$this->title = 'Post view';
$this->params['breadcrumbs'][] = $this->title;

print_r($Post);

?>

<div class="blog">
    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        This is the Post view page.
        Below me be displayed post content
    </p>

   <h1><?= $Post->header ?></h1>

</div>
