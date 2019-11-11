<?php

/* @var $this yii\web\View */
/* @var $name string */
/* @var $message string */
/* @var $exception Exception */

use yii\helpers\Html;

$this->title = $name;
?>
<!--<div class="site-error">-->
<!---->
<!--    <h1>--><?php //= Html::encode($this->title) ?><!--</h1>-->
<!---->
<!--    <div class="alert alert-danger">-->
<!--        --><?php //= nl2br(Html::encode($message)) ?>
<!--    </div>-->
<!---->
<!--    <p>-->
<!--        The above error occurred while the Web server was processing your request.-->
<!--    </p>-->
<!--    <p>-->
<!--        Please contact us if you think this is a server error. Thank you.-->
<!--    </p>-->
<!---->
<!--</div>-->


<!--=================================
 error-->

<section class="error-404 white-bg page-section-ptb">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-md-12">
                <div class="error-block text-center clearfix">
                    <h1 class="text-blue mb-40">Ooopps :(</h1>
                    <p>The Page you were looking for, couldn't be found.</p>
                </div>
                <br />
                <div class="error-search-box">
                    <p class="mb-50">Can't find what you looking for? Take a moment and do a search below or start from our <a class="link" href="/">Home Page </a></p>
                    <input id="search" type="text" placeholder="Search for pages..." name="search">
                    <a class="button-border pull-right" href="#">
                        <span>Search</span>
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>

<!--=================================
 error-->