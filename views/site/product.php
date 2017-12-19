<?php

/* @var $this yii\web\View */

use yii\helpers\Html;

$this->title = 'Product';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="fh5co-page-title" style="background-image: url(/images/slide_6.jpg);">
    <div class="overlay"></div>
    <div class="container">
        <div class="row">
            <div class="col-md-12 animate-box">
                <h1><span class="colored"><?= Html::encode($this->title) ?></span>.</h1>
            </div>
        </div>
    </div>
</div>
<div id="best-deal">
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2 text-center fh5co-heading animate-box" data-animate-effect="fadeIn">
                <h2>We are Offering the Best Real Estate Deals</h2>
                <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live
                    the blind texts. </p>
            </div>
            <?php foreach ($categories as $category): ?>
            <div class="col-md-4 item-block animate-box" data-animate-effect="fadeIn">


                <div class="fh5co-property">
                    <figure>
                        <?= Html::img(\yii\helpers\Url::to(\app\entities\Category::getImg($category->id,'category')),['class'=>'img-responsive']) ?>
                    </figure>
                    <div class="fh5co-property-innter">
                        <h3><?= Html::a($category->title,\yii\helpers\Url::to('#')) ?></h3>
                    </div>
                </div>


            </div>
            <?php endforeach;  ?>
        </div>
    </div>
</div>
