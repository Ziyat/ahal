<?php

/* @var $this yii\web\View */
/* @var $form yii\bootstrap\ActiveForm */
/* @var $model app\models\ContactForm */

use yii\helpers\Html;
use yii\bootstrap\ActiveForm;
use yii\captcha\Captcha;

$this->title = 'Contact';
$this->params['breadcrumbs'][] = $this->title;
?>

<div class="fh5co-page-title" style="background-image: url(/images/slide_6.jpg);">
    <div class="overlay"></div>
    <div class="container">
        <div class="row">
            <div class="col-md-12 animate-box">
                <h1><span class="colored">Get in</span> touch</h1>
            </div>
        </div>
    </div>
</div>


<div class="fh5co-contact animate-box">
    <div class="container">
        <div class="row">
            <div class="col-md-3">
                <h3>Contact Info.</h3>
                <ul class="contact-info">
<!--                    <li><i class="icon-map"></i>198 West 21th Street, Suite 721 New York NY 10016</li>-->
                    <li><i class="icon-phone"></i>+998 (97) 445-70-18</li>
                    <li><i class="icon-envelope"></i><a href="#">feedback@ahal.uz</a></li>
                    <li><i class="icon-globe"></i><a href="#">https://ahal.uz</a></li>
                </ul>
            </div>
            <?php if (Yii::$app->session->hasFlash('contactFormSubmitted')): ?>

                <div class="alert alert-success">
                    Thank you for contacting us. We will respond to you as soon as possible.
                </div>

                <p>
                    Note that if you turn on the Yii debugger, you should be able
                    to view the mail message on the mail panel of the debugger.
                    <?php if (Yii::$app->mailer->useFileTransport): ?>
                        Because the application is in development mode, the email is not sent but saved as
                        a file under <code><?= Yii::getAlias(Yii::$app->mailer->fileTransportPath) ?></code>.
                                                                                                            Please configure the <code>useFileTransport</code> property of the <code>mail</code>
                        application component to be false to enable email sending.
                    <?php endif; ?>
                </p>

            <?php else: ?>
            <div class="col-md-8 col-md-push-1 col-sm-12 col-sm-push-0 col-xs-12 col-xs-push-0">
                <div class="row">
                    <?php $form = ActiveForm::begin(['id' => 'contact-form']); ?>
                    <div class="col-md-6">
                        <?= $form->field($model, 'name')->textInput(['autofocus' => true]) ?>
                    </div>
                    <div class="col-md-6">
                        <?= $form->field($model, 'email') ?>
                    </div>
                    <div class="col-md-12">
                        <?= $form->field($model, 'subject') ?>
                    </div>
                    <div class="col-md-12">
                        <?= $form->field($model, 'body')->textarea(['rows' => 6]) ?>
                    </div>
                    <div class="col-md-12">
                        <?= $form->field($model, 'verifyCode')->widget(Captcha::className(), [
                            'template' => '<div class="row"><div class="col-lg-3">{image}</div><div class="col-lg-9">{input}</div></div>',
                        ])->label(Yii::t('app','Verification Code')) ?>
                    </div>
                    <div class="col-md-12">
                        <div class="form-group">
                            <?= Html::submitButton('Submit', ['class' => 'btn btn-primary', 'name' => 'contact-button']) ?>
                        </div>
                    </div>
                    <?php ActiveForm::end(); ?>
                </div>
            </div>
            <?php endif; ?>
        </div>
    </div>
</div>
