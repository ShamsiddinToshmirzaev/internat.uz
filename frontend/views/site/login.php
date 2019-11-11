<?php

/* @var $this yii\web\View */
/* @var $form yii\bootstrap\ActiveForm */
/* @var $model \common\models\LoginForm */

use yii\helpers\Html;
use yii\bootstrap\ActiveForm;

$this->title = 'Login';
$this->params['breadcrumbs'][] = $this->title;
?>
<!--=================================
 login-->

<section class="login-2 white-bg page-section-ptb">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-md-12">
                <div class="section-title-1 text-center">
                    <h1 class="text-blue">Login to your Account</h1>
                    <div class="title-line"></div>
                    <p>Log in with your id or social media</p>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="login-2-form pb-50 clearfix">
                    <div class="section-field">
                        <label for="name">User name* </label>
                        <div class="field-widget">
                            <i class="fa fa-user"></i>
                            <input id="name" class="web" type="text" placeholder="User name" name="web">
                        </div>
                    </div>
                    <div class="section-field">
                        <label for="Password">Password* </label>
                        <div class="field-widget">
                            <i class="fa fa-unlock-alt"></i>
                            <input id="Password" class="Password" type="password" placeholder="Password" name="Password">
                        </div>
                    </div>
                    <div class="section-field">
                        <div class="remember-checkbox mb-30">
                            <input type="checkbox" name="two" id="two" />
                            <label for="two"> Remember me</label>
                            <a href="#" class="pull-right">Forgot Password?</a>
                        </div>
                    </div>
                    <a href="#" class="button">
                        <span>Log in</span>
                        <i class="fa fa-check"></i>
                    </a>
                </div>
                <div class="login-2-social mt-50 text-center clearfix">
                    <h4 class="text-blue mb-30">Login with Social media</h4>
                    <ul>
                        <li><a class="fb" href="#"><i class="fa fa-facebook"></i> Log in with Facebook</a></li>
                        <li><a class="twitter" href="#"><i class="fa fa-twitter"></i> Log in with Twitter</a></li>
                        <li><a class="pinterest" href="#"><i class="fa fa-pinterest-p"></i> Log in with google+</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>

<!--=================================
 login-->
