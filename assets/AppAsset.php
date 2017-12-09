<?php
/**
 * @link http://www.yiiframework.com/
 * @copyright Copyright (c) 2008 Yii Software LLC
 * @license http://www.yiiframework.com/license/
 */

namespace app\assets;

use yii\web\AssetBundle;

/**
 * Main application asset bundle.
 *
 * @author Qiang Xue <qiang.xue@gmail.com>
 * @since 2.0
 */
class AppAsset extends AssetBundle
{
    public $basePath = '@webroot';
    public $baseUrl = '@web';
    public $css = [
        'css/animate.css',
        'css/icomoon.css',
        'css/flexslider.css'
    ];
    public $js = [
        "js/jquery.easing.1.3.js",
        "js/jquery.waypoints.min.js",
        "js/jquery.flexslider-min.js"
    ];
    public $depends = [
        'yii\web\YiiAsset',
        'yii\bootstrap\BootstrapPluginAsset',
    ];
}

class HeadAppAsset extends AssetBundle
{
    public $basePath = '@webroot';
    public $baseUrl = '@web';
    public $js = [
        "js/modernizr-2.6.2.min.js",
    ];

    public $jsOptions = [
        'position' => \yii\web\View::POS_HEAD
    ];
}

class LtAppAsset extends AssetBundle
{
    public $basePath = '@webroot';
    public $baseUrl = '@web';
    public $js = [
        "js/respond.min.js"
    ];

    public $jsOptions = [
        'condition' => 'lte IE9',
        'position' => \yii\web\View::POS_HEAD
    ];
}

class OwlAsset extends AssetBundle
{

    public $sourcePath = '@bower';

    public $css = [
        'owl-carousel2/dist/assets/owl.carousel.min.css',
        'owl-carousel2/dist/assets/owl.theme.default.css',
    ];
    public $js = [
        'owl-carousel2/dist/owl.carousel.min.js',
    ];
}

class MainAsset extends AssetBundle
{
    public $basePath = '@webroot';
    public $baseUrl = '@web';
    public $css = [
        'css/style.css',
    ];
    public $js = [
        "js/main.js"
    ];
}
