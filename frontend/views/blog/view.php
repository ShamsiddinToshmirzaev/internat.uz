<?php

use yii\helpers\Url;

$this->title = $article->title_0;
$this->params['breadcrumbs'][] = ['label' => $article->category->title, 'url' => ['blog/index']];
$this->params['breadcrumbs'][] = ['label' => $this->title];
?>

<div class="post-view">
    <div class="container">
        <div class="box">
            <h3 class="title"><?= $article->title_0 ?></h3>
            <div class="info">
                <div class="pull-left">
                    <a href="<?= Url::to(['blog/index']) ?>"><i class="fa fa-circle-o"></i><?= $article->category->title_0 ?></a>
                </div>
                <div class="pull-right">
                    <i class="fa fa-calendar"></i><?= Yii::$app->formatter->asDate($article->date) ?>
<!--                    <b>|</b><i class="fa fa-eye"></i>581                -->
                </div>
                <div class="clearfix"></div>
            </div>
            <?= $article->getThumbFileUrl('photo', 'lg') ?>
            <br>
            <?= $article->content_0?>
        </div>
    </div>
</div>