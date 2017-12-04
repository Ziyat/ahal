<?php

/* @var $this \yii\web\View */
/* @var $content string */

use app\widgets\Alert;
use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
use yii\helpers\Url;
use app\assets\AppAsset;
use app\assets\HeadAppAsset;
use app\assets\LtAppAsset;

AppAsset::register($this);
HeadAppAsset::register($this);
LtAppAsset::register($this);
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
    <link rel="apple-touch-icon" sizes="180x180" href="images/favicons/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="images/favicons/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="images/favicons/favicon-16x16.png">
    <link rel="manifest" href="images/favicons/manifest.json">
    <link rel="mask-icon" href="images/favicons/safari-pinned-tab.svg" color="#5bbad5">
    <meta name="theme-color" content="#53351d">
<!--    <meta property="og:title" content=""/>-->
<!--    <meta property="og:image" content=""/>-->
<!--    <meta property="og:url" content=""/>-->
<!--    <meta property="og:site_name" content=""/>-->
<!--    <meta property="og:description" content=""/>-->
<!--    <meta name="twitter:title" content="" />-->
<!--    <meta name="twitter:image" content="" />-->
<!--    <meta name="twitter:url" content="" />-->
<!--    <meta name="twitter:card" content="" />-->

    <link href='https://fonts.googleapis.com/css?family=Varela+Round' rel='stylesheet' type='text/css'>
    <link href="https://fonts.googleapis.com/css?family=Comfortaa:300,400,700&amp;subset=cyrillic,cyrillic-ext" rel="stylesheet">

</head>
<body>
<?php $this->beginBody() ?>
<div id="fh5co-page">
    <header id="fh5co-header" role="banner">
        <div class="container">
            <div class="row">
                <div class="header-inner">
                    <h1><a href="/"><img src="<?= Url::to('/images/ahal_Label.png')?>" alt=""></a></h1>
                    <nav role="navigation">
                        <ul>
                            <li><a href="<?= Url::to('/product')?>"><?= Yii::t('app','Products')?></a></li>
                            <li><a href="<?= Url::to('/gallery')?>"><?= Yii::t('app','Gallery')?></a></li>
                            <li><a href="<?= Url::to('/about')?>"><?= Yii::t('app','About')?></a></li>
                            <li class="call"><a href="tel:+998974115053"><i class="icon-phone"></i> +998 97 411 5053</a></li>
                            <li class="cta"><a href="<?= Url::to('/contact')?>"><?= Yii::t('app','Get in touch')?></a></li>
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
