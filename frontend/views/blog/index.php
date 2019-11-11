<?php

use yii\helpers\Url;
use yii\widgets\ListView;

/**
 * @var $category  \abdualiym\cms\entities\ArticleCategories
 */

$category = \abdualiym\cms\entities\ArticleCategories::findOne(1);
$this->title = $category->title_0;
$this->params['breadcrumbs'][] = ['label' => $category->title_0];
?>

<div class="post-category">
    <div class="container">
        <h3 class="name"><?= $category->title_0 ?></h3>
        <div class="box">
            <ul id="w0" class="nav-pills nav">
                <li class="active"><a href="#"><?= $category->title_0 ?></a></li>
<!--                <li><a href="/post/category/tenders">Tenderlar</a></li>-->
<!--                <li><a href="/post/category/statistics">Statistika</a></li>-->
            </ul>
            <div id="p0" data-pjax-container="" data-pjax-push-state="" data-pjax-timeout="1000">
                <div id="w1" class="list-view">


                    <?= ListView::widget([
                        'dataProvider' => $dataProvider,
                        'itemOptions' => ['class' => 'item'],
                        'itemView' => '_item',
                        'summary' => '',
                        'layout' => "{items}\n{summary}\n{pager}",
                        'pager' => [
                            'options' => [
                                'tag' => 'div',
                                'class' => 'nav-links',
//                        'id' => 'pager-container',
                            ],
                            'linkOptions' => [
                                'tag' => '',
//                        'class' => 'nav-links',
//                        'id' => 'pager-container',
                            ],
                        ]
                    ])
                    ?>

<!--                    <div align="center">-->
<!--                        <ul class="pagination">-->
<!--                            <li class="prev disabled"><span><i class="fa fa-angle-left"></i></span></li>-->
<!--                            <li class="active"><a href="/post/category/news?page=1" data-page="0">1</a></li>-->
<!--                            <li><a href="/post/category/news?page=2" data-page="1">2</a></li>-->
<!--                            <li><a href="/post/category/news?page=3" data-page="2">3</a></li>-->
<!--                            <li><a href="/post/category/news?page=4" data-page="3">4</a></li>-->
<!--                            <li><a href="/post/category/news?page=5" data-page="4">5</a></li>-->
<!--                            <li><a href="/post/category/news?page=6" data-page="5">6</a></li>-->
<!--                            <li><a href="/post/category/news?page=7" data-page="6">7</a></li>-->
<!--                            <li class="next"><a href="/post/category/news?page=2" data-page="1"><i class="fa fa-angle-right"></i></a></li>-->
<!--                        </ul>-->
<!--                    </div>-->
                </div>
            </div>
        </div>
    </div>
</div>
