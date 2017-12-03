<?php

/* @var $this \yii\web\View */
/* @var $content string */

use app\widgets\Alert;
use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
use app\assets\AppAsset;

AppAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<!--[if lt IE 7]>      <html lang="<?= Yii::$app->language ?>" class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html lang="<?= Yii::$app->language ?>" class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html lang="<?= Yii::$app->language ?>" class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html lang="<?= Yii::$app->language ?>" class="no-js"> <!--<![endif]-->
<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?= Html::csrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>
    <meta property="og:title" content=""/>
    <meta property="og:image" content=""/>
    <meta property="og:url" content=""/>
    <meta property="og:site_name" content=""/>
    <meta property="og:description" content=""/>
    <meta name="twitter:title" content="" />
    <meta name="twitter:image" content="" />
    <meta name="twitter:url" content="" />
    <meta name="twitter:card" content="" />

    <link href='https://fonts.googleapis.com/css?family=Varela+Round' rel='stylesheet' type='text/css'>

</head>
<body>
<?php $this->beginBody() ?>
<div id="fh5co-page">
    <header id="fh5co-header" role="banner">
        <div class="container">
            <div class="row">
                <div class="header-inner">
                    <h1><a href="/">Ahal<span>.</span></a></h1>
                    <nav role="navigation">
                        <ul>
                            <li><a href="/products"><?= Yii::t('app','Products')?></a></li>
                            <li><a href="/gallery"><?= Yii::t('app','gallery')?></a></li>
                            <li><a href="/about"><?= Yii::t('app','about')?></a></li>
                            <li class="call"><a href="tel://123456789"><i class="icon-phone"></i> +998 97 411 5053</a></li>
                            <li class="cta"><a href="contact.html"><?= Yii::t('app','Get in touch')?></a></li>
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
    </header>
        <?= Alert::widget() ?>
        <?= $content ?>
<footer id="fh5co-footer" role="contentinfo">

    <div class="container">
        <div class="col-md-3 col-sm-12 col-sm-push-0 col-xs-12 col-xs-push-0">
            <h3>About Us</h3>
            <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. </p>
            <p><a href="#" class="btn btn-primary btn-outline with-arrow btn-sm">I'm button <i class="icon-arrow-right"></i></a></p>
        </div>
        <div class="col-md-6 col-md-push-1 col-sm-12 col-sm-push-0 col-xs-12 col-xs-push-0">
            <h3>Our Services</h3>
            <ul class="float">
                <li><a href="#">Web Design</a></li>
                <li><a href="#">Branding &amp; Identity</a></li>
                <li><a href="#">Free HTML5</a></li>
                <li><a href="#">HandCrafted Templates</a></li>
            </ul>
            <ul class="float">
                <li><a href="#">Free Bootstrap Template</a></li>
                <li><a href="#">Free HTML5 Template</a></li>
                <li><a href="#">Free HTML5 &amp; CSS3 Template</a></li>
                <li><a href="#">HandCrafted Templates</a></li>
            </ul>

        </div>

        <div class="col-md-2 col-md-push-1 col-sm-12 col-sm-push-0 col-xs-12 col-xs-push-0">
            <h3>Follow Us</h3>
            <ul class="fh5co-social">
                <li><a href="#"><i class="icon-twitter"></i></a></li>
                <li><a href="#"><i class="icon-facebook"></i></a></li>
                <li><a href="#"><i class="icon-google-plus"></i></a></li>
                <li><a href="#"><i class="icon-instagram"></i></a></li>
            </ul>
        </div>


        <div class="col-md-12 fh5co-copyright text-center">
            <p>&copy; 2016 Free HTML5 template. All Rights Reserved. <span>Designed with <i class="icon-heart"></i> by <a href="http://freehtml5.co/" target="_blank">FreeHTML5.co</a> Demo Images by <a href="http://unsplash.com/" target="_blank">Unsplash</a></span></p>
        </div>

    </div>
</footer>
</div>
<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
