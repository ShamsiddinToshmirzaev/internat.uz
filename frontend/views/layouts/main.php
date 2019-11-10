<?php
use frontend\assets\AppAsset;
use yii\helpers\Html;

AppAsset::register($this);
?>
<?php $this->beginPage() ?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="keywords" content="HTML5 Template" />
    <meta name="description" content="The Corps — Multi-Purpose HTML Template" />
    <meta name="author" content="potenzaglobalsolutions.com" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
    <?php $this->head() ?>
    <?= Html::csrfMetaTags() ?>
    <title>Internat.uz |</title>
</head>
<body>

<?php $this->beginBody() ?>

<!--=================================
 preloader -->

<div id="preloader">
    <div class="clear-loading loading-effect"> <span></span> </div>
</div>

<!--=================================
 preloader -->

<!--Navbar-->
<header id="header" class="header-6">
    <div class="menu">
        <!-- menu start -->
        <nav id="menu-1" class="mega-menu">
            <!-- menu list items container -->
            <section class="menu-list-items">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-lg-12 col-md-12">
                            <!-- menu logo -->
                            <ul class="menu-logo">
                                <li>
                                    <a href="/"><img id="logo_dark_img" src="images/logo-dark.png" alt="logo"> </a>
                                </li>
                            </ul>
                            <!-- menu links -->
                            <ul class="menu-links">
                                <!-- active class -->
                                <li class="active"><a href="javascript:void(0)"> Home <i class="fa fa-angle-down fa-indicator"></i></a>
                                    <div class="drop-down grid-col-5 offset-4">
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
                                                    <li class="active"><a href="home-6-business.html">Home 6 - Business <span class="label label-info ml-10">New</span> </a></li>
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
                                <li><a href="javascript:void(0)">Pages <i class="fa fa-angle-down fa-indicator"></i></a>
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
                                                    <li><a href="contact-1.html">contact 1 </a></li>
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
                                        <li><a href="<?= \yii\helpers\Url::to(['site/contact'])?>">Contact 1</a></li>
                                        <li><a href="contact-2.html">Contact 2</a></li>
                                        <li><a href="contact-3.html">Contact 3</a></li>
                                    </ul>
                                </li>
                                <li class="seaech">
                                    <div class="search-3">
                                        <a class="search-btn not_click" href="javascript:void(0);">Search Button</a>
                                        <div class="search-3-box not-click">
                                            <input type="text" class="not-click placeholder" placeholder="Search" value="" name="s">
                                            <i class="fa fa-search"></i>
                                        </div>
                                    </div>
                                </li>
                                <li><a class="login" href="#"> Login</a>
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
                            </ul>
                        </div>
                    </div>
                </div>
            </section>
        </nav>
        <!-- menu end -->
    </div>
</header>

<!--End of Navbar-->



<!-- content -->
<div class="content print">
    <!--        --><?php //= Alert::widget() ?>
    <?= $content ?>
</div>
<!-- //content -->



<!--=================================
 action-box -->

<section class="action-box">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-md-8">
                <h3 class="text-white">The Corps Unique & Clean HTML5 Multi-Purpose Template</h3>
                <p class="text-white">We are a creative company, who works with passion and love. We provide the best services you need. </p>
            </div>
            <div class="col-lg-4 col-md-4 text-right action-box-button">
                <a href="#" class="button button-white mt-15">
                    <span>More Demo</span>
                    <i class="fa fa-hand-o-right"></i>
                </a>
                <a href="#" class="button button-black mt-15">
                    <span>Purchase Now</span>
                    <i class="fa fa-download"></i>
                </a>
            </div>
        </div>
    </div>
</section>

<!--=================================
 action-box -->

<!--=================================
 footer -->

<footer class="footer-4 page-section-pt">
    <div class="container">
        <div class="row">
            <div class="col-lg-3 col-md-3 col-sm-6">
                <div class="footer-logo">
                    <img id="logo-footer" class="mb-15" src="images/logo.png" alt="">
                    <p class="text-white pb-10">The Crops is a Hand Crafted Pixel Perfect, Responsive, HTML5 & outstanding template with Many Features that You Need.  </p>
                    <p class="text-white">Office: 1234 North Avenue Luke Lane South Bend, IN 360001</p>
                </div>
            </div>
            <div class="col-lg-3 col-md-3 col-sm-6">
                <div class="recent-post footer-hedding">
                    <h4 class="text-blue mb-30">Recent Posts</h4>
                    <div class="recent-post mb-30">
                        <div class="recent-post-image">
                            <img src="images/portfolio/small/01.jpg" alt="">
                        </div>
                        <div class="recent-post-info">
                            <a href="#">Omnis voluptas ...</a>
                            <span><i class="fa fa-calendar"></i> September 30, 2015</span>
                        </div>
                    </div>

                    <div class="recent-post mb-30">
                        <div class="recent-post-image">
                            <img src="images/portfolio/small/02.jpg" alt="">
                        </div>
                        <div class="recent-post-info">
                            <a href="#">Omnis voluptas ...</a>
                            <span><i class="fa fa-calendar"></i> September 30, 2015</span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-3 col-sm-6">
                <div class="footer-flickr footer-hedding">
                    <h4 class="text-blue mb-30">Flickr</h4>
                    <div class="grid_3 social-feed flickr-feed"></div>
                </div>
            </div>
            <div class="col-lg-3 col-md-3 col-sm-6">
                <div class="footer-Newsletter footer-hedding">
                    <h4 class="text-blue mb-30">Newsletter</h4>
                    <p class="text-white mb-30">Keep up on our always evolving product features and technology. Enter your e-mail and subscribe to our newsletter.</p>
                    <div class="input-group divcenter">
                        <span class="input-group-addon"><i class="fa fa-envelope-o"></i></span>
                        <input type="email" placeholder="Enter your Email" class="form-control">
                        <span class="input-group-btn">
                  <button type="submit" class="btn btn-icon"><i class="fa fa-paper-plane"></i></button>
              </span>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="footer-widget mt-60">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-6">
                    <p class="text-white mt-15"> &copy;Copyright <span id="copyright"> <script>document.getElementById('copyright').appendChild(document.createTextNode(new Date().getFullYear()))</script></span> <a href="#"> theCORPS</a> All Rights Reserved </p>
                </div>
                <div class="col-lg-6 col-md-6">
                    <div class="footer-widget-social">
                        <ul>
                            <li><a href="#" data-tooltip="facebook"><i class="fa fa-facebook"></i></a></li>
                            <li><a href="#" data-tooltip="twitter"><i class="fa fa-twitter"></i></a></li>
                            <li><a href="#" data-tooltip="dribbble"><i class="fa fa-dribbble"></i> </a></li>
                            <li><a href="#" data-tooltip="Vimeo"><i class="fa fa-vimeo"></i> </a></li>
                            <li><a href="#" data-tooltip="Pinterest"><i class="fa fa-pinterest-p"></i> </a></li>
                            <li><a href="#" data-tooltip="Behance"><i class="fa fa-behance"></i> </a></li>
                            <li><a href="#" data-tooltip="Linkedin"><i class="fa fa-linkedin"></i> </a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>

<!--=================================
end of footer -->


<!--=================================
 popup contact -->

<div class="popup-contact">
    <div class="popup-contact-box">
        <a href="#" id="contact-btn"><i class="fa fa-envelope-o"></i></a>
        <div class="contact-info clearfix">
            <h4 class="mb-30">Send us a message</h4>
            <div id="formmessage-2">Success/Error Message Goes Here</div>
            <form class="form-horizontal" id="contactform-2" role="form" method="post" action="php/contact-form-2.php">
                <div class="contact-form">
                    <div class="section-field">
                        <div class="field-widget">
                            <i class="fa fa-user"></i>
                            <input id="name" type="text" placeholder="Name*"  name="name">
                        </div>
                    </div>
                    <div class="section-field">
                        <div class="field-widget">
                            <i class="fa fa-envelope-o"></i>
                            <input type="email" placeholder="Email*" name="email">
                        </div>
                    </div>
                    <div class="section-field clearfix">
                        <div class="field-widget">
                            <i class="fa fa-pencil"></i>
                            <textarea class="input-message"  placeholder="Comment*" rows="3" name="message"></textarea>
                        </div>
                    </div>
                    <input type="hidden" name="action" value="sendEmail"/>
                    <button id="submit-2" name="submit" type="submit" value="Send" class="button-border pull-right clearfix"><span>Send</span></button>
                </div>
            </form>
            <div id="ajaxloader-2" style="display:none"><img class="center-block mt-30 mb-30" src="images/ajax-loader.gif" alt=""></div>
        </div>
    </div>
</div>

<!--=================================
 popup contact -->


<div id="back-to-top"><a class="top arrow" href="#top"><i class="fa fa-long-arrow-up"></i></a></div>

<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>