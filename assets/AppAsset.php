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
//        'css/bootstrap.css',
        'css/flexslider.css',
        'css/style.css',
    ];
    public $js = [
        "js/jquery.easing.1.3.js",
        "js/jquery.waypoints.min.js",
        "js/jquery.flexslider-min.js",
        "js/main.js"
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