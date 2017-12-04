<?php

/* @var $this yii\web\View */
/* @var $name string */
/* @var $message string */
/* @var $exception Exception */

use yii\helpers\Html;

$this->title = $name;
?>
<div id="best-deal">
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2 text-center fh5co-heading animate-box" data-animate-effect="fadeIn">
                <h2><?= Html::encode($this->title) ?></h2>
                <div class="alert alert-danger">
                    <?= nl2br(Html::encode($message)) ?>
                </div>
            </div>
        </div>
    </div>
</div>
