<?php

/**
 * @var $sliderphotos frontend\models\SliderPhotos
 */
$this->title = 'My Yii Application';

?>


<!--=================================
 Blog-->

<section class="blog white-bg page-section-ptb">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-lg-12">
                <?php
                foreach ($blogs as $blog):
                    ?>
                    <div class="blog-entry post-2">
                        <div class="blog-entry-image hover-direction clearfix">
                            <div class="portfolio-item">
                                <img class="img-responsive"
                                     src="<?= $blog->getImageFileUrl('photo', Yii::getAlias('@storageHostInfo/data/articles/[[attribute_id]]/[[filename]].[[extension]]')) ?>"
                                     alt="">
                                <div class="portfolio-caption">
                                    <div class="portfolio-overlay">
                                        <a href="#"><i class="fa fa-plus"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="entry-title mt-30 mb-20">
                            <i class="fa fa-camera-retro"></i>
                            <h3><?= $blog['title_0']; ?></h3>
                        </div>
                        <div class="entry-meta">
                            <a href="#"><i class="fa fa-user"></i> By The Corps</a>
                            <a href="#"><i class="fa fa-comments-o"></i> 5 Comments</a>
                            <a href="#"><i class="fa fa-folder-open"></i> Design/Graphics</a>
                        </div>
                        <div class="entry-content mt-20 mb-30">
                            <p><?= $blog['content_0']; ?></p>
                        </div>
                        <div class="entry-share clearfix">
                            <a class="button pull-left" href="#">
                                <span>Read More</span>
                                <i class="fa fa-hand-o-right"></i>
                            </a>
                            <div class="share pull-right">
                                <a class="share-button" href="#">
                                    <i class="fa fa-share-alt"></i>
                                </a>
                                <ul>
                                    <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                    <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                    <li><a href="#"><i class="fa fa-dribbble"></i></a></li>
                                    <li><a href="#"><i class="fa fa-vimeo"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                <?php
                endforeach;
                ?>
                <hr>

            </div>
        </div>
    </div>
</section>

<!--=================================
 Blog-->