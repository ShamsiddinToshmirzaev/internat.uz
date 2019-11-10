<?php

/* @var $this yii\web\View */
/* @var $form yii\bootstrap\ActiveForm */
/* @var $model \frontend\models\ContactForm */

use yii\helpers\Html;
use yii\bootstrap\ActiveForm;
use yii\captcha\Captcha;


?>

<!--=================================
 contact-->

<section class="contact white-bg page-section-ptb">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-md-12">
                <div class="section-title-1 text-center">
                    <h1 class="text-blue">Let’s Get in Touch!</h1>
                    <div class="title-line"></div>
                    <p>We have completed over a 1000+ projects for five hundred clients. Give us your next project.</p>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-3 col-md-3 col-sm-3">
                <div class="contact-box text-center">
                    <i class="fa fa-map-marker"></i>
                    <h3 class="mt-20">Address</h3>
                    <p class="mt-20">1234 North Avenue Luke Lane South Bend, IN 360001 </p>
                </div>
            </div>
            <div class="col-lg-3 col-md-3 col-sm-3">
                <div class="contact-box text-center">
                    <i class="fa fa-phone"></i>
                    <h3 class="mt-20">Phone</h3>
                    <p class="mt-20">+0123 456 789<br/> +0123 456 789</p>
                </div>
            </div>
            <div class="col-lg-3 col-md-3 col-sm-3">
                <div class="contact-box text-center">
                    <i class="fa fa-envelope-o"></i>
                    <h3 class="mt-20">Email</h3>
                    <p class="mt-20">support@thecorps.com <br/> support@thecorps.com</p>
                </div>
            </div>
            <div class="col-lg-3 col-md-3 col-sm-3">
                <div class="contact-box text-center">
                    <i class="fa fa-fax"></i>
                    <h3 class="mt-20">Fax</h3>
                    <p class="mt-20">+0123 456 789<br/> +0123 456 789</p>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12 col-md-12 text-center">
                <p class="mt-50 mb-30">It would be great to hear from you! If you got any questions, please do not hesitate to send us a message. We are looking forward to hearing from you! We reply within <br /><span class="tooltip-content-2" data-original-title="Mon-Fri 10am–7pm (GMT +1)" data-toggle="tooltip" data-placement="top"> 24 hours !</span></p>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12 col-md-12">
                <div id="formmessage">Success/Error Message Goes Here</div>
                <form class="form-horizontal" id="contactform" role="form" method="post" action="php/contact-form.php">
                    <div class="contact-form">
                        <div class="section-field">
                            <i class="fa fa-user"></i>
                            <input id="name" type="text" placeholder="Name*"  name="name">
                        </div>
                        <div class="section-field">
                            <i class="fa fa-envelope-o"></i>
                            <input type="email" placeholder="Email*" name="email">
                        </div>
                        <div class="section-field">
                            <i class="fa fa-phone"></i>
                            <input type="text" placeholder="Phone*" name="phone">
                        </div>
                        <div class="section-field textarea">
                            <i class="fa fa-pencil"></i>
                            <textarea class="input-message" placeholder="Comment*" rows="7" name="message"></textarea>
                        </div>
                        <input type="hidden" name="action" value="sendEmail"/>
                        <button id="submit" name="submit" type="submit" value="Send" class="button mt-15"><span> Send your message </span> <i class="fa fa-paper-plane"></i></button>
                    </div>
                </form>
                <div id="ajaxloader" style="display:none"><img class="center-block mt-30 mb-30" src="images/ajax-loader.gif" alt=""></div>
            </div>
        </div>
        <div class="page-section-pt">
            <div class="row">
                <div class="col-lg-12 col-md-12">
                    <div class="section-title-1 text-center">
                        <h1 class="text-blue">Additional info</h1>
                        <div class="title-line"></div>
                        <p>Sed non  mauris vitae erat consequat auctor</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-4 col-md-4 col-sm-4">
                    <div class="feature-3">
                        <div class="feature-3-title">
                            <span class="icon-clock" aria-hidden="true"></span>
                        </div>
                        <div class="feature-3-info work-hr">
                            <h3 class="text-back mb-20">Business Hours</h3>
                            <p>Our Support team is available from <br/>
                                <b>Monday to Friday :</b> 10 a.m. – 7 p.m. (GMT +1)<br/>
                                <b>Saturday : </b> 9 a.m. – 1 p.m. (GMT +1)<br/>
                                <b>Sunday : </b> Closed
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-4">
                    <div class="feature-3">
                        <div class="feature-3-title">
                            <span class="icon-support" aria-hidden="true"></span>
                        </div>
                        <div class="feature-3-info">
                            <h3 class="text-back mb-20">Our Support Center</h3>
                            <p>Lorem ipsum dolor sit amet, of Lorem Ipsum. Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat ipsum, nec sagittis sem nibh id elit. Duis sed odio sit amet nibh
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-4">
                    <div class="feature-3">
                        <div class="feature-3-title">
                            <span class="icon-info" aria-hidden="true"></span>
                        </div>
                        <div class="feature-3-info">
                            <h3 class="text-back mb-20">Some Information</h3>
                            <p>Porem ipsum dolor amet Lorem Ipsum. Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat ipsum, nec sagittis sem nibh id elit. Duis sed odio sit amet nibh
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!--=================================
 contact-->



<!--=================================
 contact map -->

<section class="contact-map clearfix">
    <div class="container-fluid">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3151.8351288872545!2d144.9556518!3d-37.8173306!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x6ad65d4c2b349649%3A0xb6899234e561db11!2sEnvato!5e0!3m2!1sen!2sin!4v1443621171568" width="100%" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
    </div>
</section>

<!--=================================
 contact map -->







