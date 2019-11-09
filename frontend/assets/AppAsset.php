<?php

namespace frontend\assets;

use yii\web\AssetBundle;

/**
 * Main frontend application asset bundle.
 */
class AppAsset extends AssetBundle
{
    public $basePath = '@webroot';
    public $baseUrl = '@web';
    public $css = [
//        'css/site.css',
        'css/bootstrap.min.css',
        'css/plugins-css.css',
        'css/mega-menu/mega_menu.css',
        'css/default.css',
        'css/style.css',
        'css/responsive.css',
        'css/custom.css',

    ];
    public $js = [
        'js/jquery.min.js',
        'js/bootstrap.min.js',
        'js/plugins-jquery.js',
        'js/mega-menu/mega_menu.js',
        'js/social/socialstream.jquery.js',
        'js/isotope/isotope.pkgd.min.js',
        'js/popup/jquery.magnific-popup.js',
        'js/wow.min.js',
        'js/jquery.appear.js',
        'js/custom.js',
    ];
    public $depends = [
        'yii\web\YiiAsset',
        'yii\bootstrap\BootstrapAsset',
    ];
}
