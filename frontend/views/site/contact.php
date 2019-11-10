<?php

/* @var $this yii\web\View */
/* @var $form yii\bootstrap\ActiveForm */
/* @var $model \frontend\models\ContactForm */

use yii\helpers\Html;
use yii\bootstrap\ActiveForm;
use yii\captcha\Captcha;


?>



<!--=================================
 header -->

<header id="header" class="header">
    <div class="topbar">
        <div class="container">
            <div class="row search-main">
                <div class="col-lg-6 col-md-6 col-sm-6">
                    <div class="topbar-left text-left">
                        <ul>
                            <li><i class="fa fa-envelope-o text-blue"></i> support@thecorps.com</li>
                            <li><i class="fa fa-phone text-blue"></i> +0123 456 789</li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-6">
                    <div class="topbar-right text-right">
                        <ul>
                            <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                            <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                            <li><a href="#"><i class="fa fa-instagram"></i></a></li>
                            <li><a class="login" href="#"><i class="fa fa-lock text-blue"></i> Login</a>
                                <div class="login-1 login-open text-left">
                                    <form class="form-signin">
                                        <div class="form-group">
                                            <label>Username</label>
                                            <input type="text" class="form-control" name="username" placeholder="Email Address"/>
                                        </div>
                                        <div class="form-group">
                                            <label>Password</label>
                                            <input type="password" class="form-control" name="password" placeholder="Password"/>
                                        </div>
                                        <div class="remember-checkbox">
                                            <input type="checkbox" name="one" id="one" />
                                            <label class="remember" for="one">Remember me</label>
                                        </div>
                                        <a href="#" class="button">
                                            <span>Login</span>
                                        </a>
                                        <span>-or-</span>
                                        <a href="register-1.html" class="button button-grey">
                                            <span>Register</span>
                                        </a>
                                        <a href="#">Forgot password ?</a>
                                    </form>
                                    <div class="login-with">
                                        <span>Login With: </span>
                                        <a class="fb" href="#"><i class="fa fa-facebook"></i></a>
                                        <a class="twitter" href="#"><i class="fa fa-twitter"></i></a>
                                        <a class="google-plus" href="#"><i class="fa fa-google-plus"></i></a>
                                    </div>
                                </div>
                            </li>
                            <li><a href="register-1.html"><i class="fa fa-user text-blue"></i> Register</a></li>
                            <li><div class="search"><a href="#"><i class="fa fa-search"></i></a></div></li>
                        </ul>
                    </div>
                </div>
                <div class="search-open">
                    <input class="form-control" type="text" placeholder="Type & Hit Enter..">
                    <div class="search-close"><i class="fa fa-times"></i></div>
                </div>
            </div>
        </div>
    </div>

    <!--=================================
     mega menu -->

    <div class="menu">
        <!-- menu start -->
        <nav id="menu-1" class="mega-menu">
            <!-- menu list items container -->
            <section class="menu-list-items">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12 col-md-12">
                            <!-- menu logo -->
                            <ul class="menu-logo">
                                <li>
                                    <a href="home-1-default.html"><img id="logo_img" src="images/logo.png" alt="logo"> </a>
                                </li>
                            </ul>
                            <!-- menu links -->
                            <ul class="menu-links">
                                <!-- active class -->
                                <li><a href="javascript:void(0)"> Home <i class="fa fa-angle-down fa-indicator"></i></a>
                                    <div class="drop-down grid-col-8 offset-4">
                                        <!--grid row-->
                                        <div class="grid-row">
                                            <!--grid column 3-->
                                            <div class="grid-col-4">
                                                <ul>
                                                    <li><a href="home-1-default.html">Home 1 - Default <span class="label label-danger ml-10">Hot</span></a></li>
                                                    <li><a href="home-2-rain.html">Home 2 - Rain</a></li>
                                                    <li><a href="home-3-corporate.html">Home 3 - Corporate</a></li>
                                                    <li><a href="home-4-corporate.html">Home 4 - Corporate</a></li>
                                                    <li><a href="home-5-creative.html">Home 5 - Creative</a></li>
                                                </ul>
                                            </div>
                                            <div class="grid-col-4">
                                                <ul>
                                                    <li><a href="home-6-business.html">Home 6 - Business <span class="label label-info ml-10">New</span> </a></li>
                                                    <li><a href="home-7-classic.html">Home 7 - Classic <span class="label label-primary ml-10">New</span></a></li>
                                                    <li><a href="home-8-agency.html">Home 8 - Agency <span class="label label-success ml-10">New</span></a></li>
                                                    <li><a href="home-9-personal.html">Home 9 - Personal <span class="label label-warning ml-10">New</span></a></li>
                                                    <li><a href="home-10-parallax.html">Home 10 - Parallax <span class="label label-default ml-10">New</span></a></li>
                                                </ul>
                                            </div>
                                            <div class="grid-col-4">
                                                <ul>
                                                    <li><a target="_blank" href="http://themes.potenzaglobal.net/thecorps/one-page/one-page-1-default/index.html">One page 1 - Default </a></li>
                                                    <li><a target="_blank" href="http://themes.potenzaglobal.net/thecorps/one-page/one-page-2-rain/index.html">One page 2 - Rain </a></li>
                                                    <li><a target="_blank" href="http://themes.potenzaglobal.net/thecorps/one-page/one-page-3-corporate/index.html">One page 3 - Corporate </a></li>
                                                    <li><a target="_blank" href="http://themes.potenzaglobal.net/thecorps/one-page/one-page-4-corporate/index.html">One page 4 - Corporate </a></li>
                                                    <li><a target="_blank" href="http://themes.potenzaglobal.net/thecorps/one-page/one-page-5-creative/index.html">One page 5 - Creative </a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li class="active"><a href="javascript:void(0)">Pages <i class="fa fa-angle-down fa-indicator"></i></a>
                                    <!-- drop down full width -->
                                    <div class="drop-down menu-bg grid-col-12">
                                        <!--grid row-->
                                        <div class="grid-row">
                                            <!--grid column 3-->
                                            <div class="grid-col-3">
                                                <ul>
                                                    <li><a href="about-1.html">About 1</a></li>
                                                    <li><a href="about-2.html">About 2</a></li>
                                                    <li><a href="about-3.html">About 3</a></li>
                                                    <li><a href="about-me.html">About me</a></li>
                                                    <li><a href="service-1.html">service 1 </a></li>
                                                    <li><a href="service-2.html">service 2 </a></li>
                                                    <li><a href="service-3.html">service 3 </a></li>
                                                    <li><a href="team-1.html">team 1 </a></li>
                                                    <li><a href="team-2.html">team 2 </a></li>
                                                </ul>
                                            </div>
                                            <!--grid column 3-->
                                            <div class="grid-col-3">
                                                <ul>
                                                    <li><a href="team-single.html">team single </a></li>
                                                    <li class="active"><a href="contact-1.html">contact 1 </a></li>
                                                    <li><a href="contact-2.html">contact 2 </a></li>
                                                    <li><a href="contact-3.html">contact 3 </a></li>
                                                    <li><a href="faqs-1.html">faqs 1 </a></li>
                                                    <li><a href="faqs-2.html">faqs 2 </a></li>
                                                    <li><a href="our-clients-1.html">our clients 1 </a></li>
                                                    <li><a href="our-clients-2.html">our clients 2 </a></li>
                                                    <li><a href="careers.html">careers </a></li>
                                                </ul>
                                            </div>
                                            <!--grid column 3-->
                                            <div class="grid-col-3">
                                                <ul>
                                                    <li><a href="maintenance-1.html">maintenance 1 </a></li>
                                                    <li><a href="maintenance-2.html">maintenance 2 </a></li>
                                                    <li><a href="login-1.html">login 1 </a></li>
                                                    <li><a href="login-2.html">login 2 </a></li>
                                                    <li><a href="register-1.html">register 1 </a></li>
                                                    <li><a href="register-2.html">register 2 </a></li>
                                                    <li><a href="error-404-1.html">error 404 1 </a></li>
                                                    <li><a href="error-404-2.html">error 404 2 </a></li>
                                                    <li><a href="coming-soon-1.html">coming soon 1 </a></li>
                                                </ul>
                                            </div>
                                            <!--grid column 3-->
                                            <div class="grid-col-3">
                                                <ul>
                                                    <li><a href="coming-soon-2.html">coming soon 2 </a></li>
                                                    <li><a href="page-left-sidebar.html">page left sidebar </a></li>
                                                    <li><a href="page-right-sidebar.html">page right sidebar </a></li>
                                                    <li><a href="page-two-sidebar.html">page two sidebar </a></li>
                                                    <li><a href="sitemap.html">sitemap </a></li>
                                                    <li><a href="terms-and-conditions.html">terms and conditions </a></li>
                                                    <li><a href="privacy-policy.html">privacy policy </a></li>
                                                </ul>
                                            </div>

                                        </div>
                                    </div>
                                </li>
                                <li><a href="javascript:void(0)">blog <i class="fa fa-angle-down fa-indicator"></i></a>
                                    <!-- drop down multilevel  -->
                                    <ul class="drop-down-multilevel">
                                        <li><a href="javascript:void(0)">blog classic <i class="fa fa-angle-right fa-indicator"></i> </a>

                                            <!-- drop down second level -->
                                            <ul class="drop-down-multilevel">
                                                <li><a href="blog-classic-left-sidebar.html">left sidebar</a></li>
                                                <li><a href="blog-classic-right-sidebar.html">right sidebar</a></li>
                                                <li><a href="blog-classic-fullwidth.html">fullwidth</a></li>
                                            </ul>
                                        </li>
                                        <li><a href="javascript:void(0)">grid <i class="fa fa-angle-right fa-indicator"></i> </a>
                                            <!-- drop down second level -->
                                            <ul class="drop-down-multilevel">
                                                <li><a href="blog-grid-2-column.html"> 2 column </a> </li>
                                                <li><a href="blog-grid-3-column.html"> 3 column </a> </li>
                                                <li><a href="blog-grid-2-column-left-sidebar.html">left sidebar</a></li>
                                                <li><a href="blog-grid-2-column-right-sidebar.html">right sidebar</a></li>
                                            </ul>
                                        </li>
                                        <li><a href="javascript:void(0)">Masonry  <i class="fa fa-angle-right fa-indicator"></i> </a>
                                            <!-- drop down second level -->
                                            <ul class="drop-down-multilevel">
                                                <li><a href="blog-masonry-2-columns.html"> 2 column </a> </li>
                                                <li><a href="blog-masonry-3-columns.html"> 3 column </a> </li>
                                                <li><a href="blog-masonry-2-columns-left-sidebar.html">left sidebar</a></li>
                                                <li><a href="blog-masonry-2-columns-right-sidebar.html">right sidebar</a></li>
                                            </ul>
                                        </li>
                                        <li><a href="#">timeline  <i class="fa fa-angle-right fa-indicator"></i></a>
                                            <!-- drop down second level -->
                                            <ul class="drop-down-multilevel">
                                                <li><a href="blog-timeline.html">fullwidth</a></li>
                                                <li><a href="blog-timeline-left-sidebar.html">left sidebar</a></li>
                                                <li><a href="blog-timeline-right-sidebar.html">right sidebar</a></li>
                                            </ul>
                                        </li>
                                        <li><a href="#">single post  <i class="fa fa-angle-right fa-indicator"></i></a>
                                            <!-- drop down second level -->
                                            <ul class="drop-down-multilevel">
                                                <li><a href="blog-single-image-post.html"> blog image post </a> </li>
                                                <li><a href="blog-single-video-post.html"> blog video post </a> </li>
                                                <li><a href="blog-single-youtube-post.html"> blog youtube post </a> </li>
                                                <li><a href="blog-single-vimeo-post.html"> blog vimeo post </a> </li>
                                                <li><a href="blog-single-audio-post.html"> blog audio post  </a> </li>
                                            </ul>
                                        </li>
                                    </ul>
                                </li>
                                <li><a href="javascript:void(0)">Portfolio<i class="fa fa-angle-down fa-indicator"></i></a>
                                    <!-- drop down multilevel  -->
                                    <ul class="drop-down-multilevel left-side">

                                        <li><a href="#">portfolio classic <i class="fa fa-angle-left fa-indicator"></i></a>
                                            <!-- drop down second level -->
                                            <ul class="drop-down-multilevel left-side">
                                                <li><a href="javascript:void(0)"> 1 column  <i class="fa fa-angle-left fa-indicator"></i></a>
                                                    <!-- drop down third level -->
                                                    <ul class="drop-down-multilevel left-side">
                                                        <li><a href="portfolio-classic-1-column-default.html">default</a></li>
                                                        <li><a href="portfolio-classic-1-columns-left-sidebar.html">left sidebar</a></li>
                                                        <li><a href="portfolio-classic-1-columns-right-sidebar.html">right sidebar</a></li>
                                                    </ul>
                                                </li>
                                                <li><a href="javascript:void(0)"> 2 column  <i class="fa fa-angle-left fa-indicator"></i></a>
                                                    <!-- drop down third level -->
                                                    <ul class="drop-down-multilevel left-side">
                                                        <li><a href="portfolio-classic-2-columns-left-sidebar.html">left sidebar</a></li>
                                                        <li><a href="portfolio-classic-2-columns-right-sidebar.html">right sidebar</a></li>
                                                        <li><a href="portfolio-classic-2-columns-fullwidth.html">fullwidth</a></li>
                                                    </ul>
                                                </li>
                                                <li><a href="javascript:void(0)"> 3 column  <i class="fa fa-angle-left fa-indicator"></i></a>
                                                    <!-- drop down third level -->
                                                    <ul class="drop-down-multilevel left-side">
                                                        <li><a href="portfolio-classic-3-columns-left-sidebar.html">left sidebar</a></li>
                                                        <li><a href="portfolio-classic-3-columns-right-sidebar.html">right sidebar</a></li>
                                                        <li><a href="portfolio-classic-3-columns-fullwidth.html">fullwidth</a></li>
                                                    </ul>
                                                </li>
                                                <li><a href="javascript:void(0)"> 4 column <i class="fa fa-angle-left fa-indicator"></i></a>
                                                    <!-- drop down third level -->
                                                    <ul class="drop-down-multilevel left-side">
                                                        <li><a href="portfolio-classic-4-columns-left-sidebar.html">left sidebar</a></li>
                                                        <li><a href="portfolio-classic-4-columns-right-sidebar.html">right sidebar</a></li>
                                                        <li><a href="portfolio-classic-4-columns-fullwidth.html">fullwidth</a></li>
                                                    </ul>
                                                </li>
                                            </ul>
                                        </li>
                                        <li><a href="javascript:void(0)">portfolio Masonry <i class="fa fa-angle-left fa-indicator"></i></a>
                                            <!-- drop down second level -->
                                            <ul class="drop-down-multilevel left-side">
                                                <li><a href="portfolio-masonry-2-columns.html"> 2 column </a> </li>
                                                <li><a href="portfolio-masonry-3-columns.html"> 3 column </a> </li>
                                                <li><a href="portfolio-masonry-4-columns.html"> 4 column </a> </li>
                                                <li><a href="portfolio-masonry-full-screen.html"> full screen </a> </li>
                                            </ul>
                                        </li>
                                        <li><a href="#">portfolio grid <i class="fa fa-angle-left fa-indicator"></i></a>
                                            <ul class="drop-down-multilevel left-side">
                                                <li><a href="javascript:void(0)"> grid <i class="fa fa-angle-left fa-indicator"></i></a>
                                                    <!-- drop down third level -->
                                                    <ul class="drop-down-multilevel left-side">
                                                        <li><a href="portfolio-grid-2-columns.html">2 column</a></li>
                                                        <li><a href="portfolio-grid-3-columns.html">3 column</a></li>
                                                        <li><a href="portfolio-grid-4-columns.html">4 column</a></li>
                                                    </ul>
                                                </li>
                                                <li><a href="javascript:void(0)"> grid full screen <i class="fa fa-angle-left fa-indicator"></i></a>
                                                    <!-- drop down third level -->
                                                    <ul class="drop-down-multilevel left-side">
                                                        <li><a href="portfolio-grid-full-screen-2-columns.html">2 column</a></li>
                                                        <li><a href="portfolio-grid-full-screen-3-columns.html">3 column</a></li>
                                                        <li><a href="portfolio-grid-full-screen-4-columns.html">4 column</a></li>
                                                        <li><a href="portfolio-grid-full-screen-5-columns.html">5 column</a></li>
                                                    </ul>
                                                </li>
                                            </ul>
                                        </li>
                                        <li><a href="#">portfolio Packery <i class="fa fa-angle-left fa-indicator"></i></a>
                                            <!-- drop down second level -->
                                            <ul class="drop-down-multilevel left-side">
                                                <li><a href="portfolio-packetry.html"> packetry fullwidth </a> </li>
                                                <li><a href="portfolio-packetry-fullwidth.html"> full screen </a> </li>
                                            </ul>
                                        </li>
                                        <li><a href="#">portfolio single <i class="fa fa-angle-left fa-indicator"></i></a>
                                            <!-- drop down second level -->
                                            <ul class="drop-down-multilevel left-side">
                                                <li><a href="portfolio-single-1.html"> single 01 </a> </li>
                                                <li><a href="portfolio-single-2.html"> single 02 </a> </li>
                                            </ul>
                                        </li>
                                    </ul>
                                </li>
                                <li><a href="javascript:void(0)"> Shortcodes <i class="fa fa-angle-down fa-indicator"></i></a>
                                    <!-- drop down full width -->
                                    <div class="drop-down grid-col-12">
                                        <!--grid row-->
                                        <div class="grid-row">
                                            <!--grid column 3-->
                                            <div class="grid-col-3">
                                                <ul>
                                                    <li><a href="elements-accordions.html"><i class="fa fa-list-ul"></i> accordions </a></li>
                                                    <li><a href="elements-action-box.html"><i class="fa fa-rocket"></i> action box</a></li>
                                                    <li><a href="elements-alerts-and-callouts.html"><i class="fa fa-info-circle"></i> alerts and callouts</a></li>
                                                    <li><a href="elements-buttons.html"><i class="fa fa-external-link"></i> buttons</a></li>
                                                    <li><a href="elements-carousel-slider.html"><i class="fa fa-exchange"></i> carousel slider</a></li>
                                                </ul>
                                            </div>
                                            <!--grid column 3-->
                                            <div class="grid-col-3">
                                                <ul>
                                                    <li><a href="elements-columns.html"><i class="fa fa-th"></i> columns</a></li>
                                                    <li><a href="elements-content-box.html"><i class="fa fa-file-text-o"></i> content box</a></li>
                                                    <li><a href="elements-counter.html"><i class="fa fa-sort-numeric-asc"></i> counter</a></li>
                                                    <li><a href="elements-data-table.html"><i class="fa fa-table"></i> data table</a></li>
                                                    <li><a href="elements-lists-style.html"><i class="fa fa-th-list"></i> lists style</a></li>
                                                </ul>
                                            </div>
                                            <!--grid column 3-->
                                            <div class="grid-col-3">
                                                <ul>
                                                    <li><a href="elements-post-style.html"> <i class="fa fa-photo"></i> post style</a></li>
                                                    <li><a href="elements-pricing-tables.html"><i class="fa fa-money"></i> pricing tables</a></li>
                                                    <li><a href="elements-skills.html"><i class="fa fa-tasks"></i> skills</a></li>
                                                    <li><a href="elements-social-icon.html"><i class="fa fa-share-alt"></i> social icon</a></li>
                                                    <li><a href="elements-social-widget-gallery.html"><i class="fa fa-bullhorn"></i> social widget gallery</a></li>
                                                </ul>
                                            </div>
                                            <!--grid column 3-->
                                            <div class="grid-col-3">
                                                <ul>
                                                    <li><a href="elements-tabs.html"><i class="fa fa-star"></i> tabs</a></li>
                                                    <li><a href="elements-team.html"><i class="fa fa-users"></i> team</a></li>
                                                    <li><a href="elements-typography.html"><i class="fa fa-italic"></i> typography</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li><a href="javascript:void(0)"> Contact <i class="fa fa-angle-down fa-indicator"></i></a>
                                    <!-- drop down multilevel  -->
                                    <ul class="drop-down-multilevel right-menu">
                                        <li><a href="contact-1.html">Contact 1</a></li>
                                        <li><a href="contact-2.html">Contact 2</a></li>
                                        <li><a href="contact-3.html">Contact 3</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </section>
        </nav>
        <!-- menu end -->
    </div>
</header>

<!--=================================
 header -->



<!--=================================
 inner-intro-->

<section class="inner-intro bg-2 bg-opacity-black-70">
    <div class="container">
        <div class="row text-center intro-title">
            <h1 class="text-blue">Contact us</h1>
            <p class="text-white">Let’s make something great together</p>
            <ul class="page-breadcrumb">
                <li><a href=""><i class="fa fa-home"></i> Home</a> <i class="fa fa-angle-double-right"></i></li>
                <li><a href="">pages</a> <i class="fa fa-angle-double-right"></i></li>
                <li><span>Contact us 1</span> </li>
            </ul>
        </div>
    </div>
</section>

<!--=================================
 inner-intro-->



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







