<?php 

/* @var $this yii\web\View */
use yii\helpers\Html;
use yii\bootstrap\ActiveForm;
use yii\helpers\Url;

\yii\bootstrap\BootstrapAsset::register($this);

$this->title="Registration Successul";
?>
<div class="guest-ui">
    <div class="user-index-content">
        <div class="container">
            <div class="logo">
                <img src="/images/logo/Clair-logo-B-RGB.png">
            </div>
        </div>
        <div class="nav">
            <div class="container">
                <h6>Claire Marketing LTD</h6>
            </div>
        </div>
    </div>
    <div class="guest col-lg-12">
        <div class="site-request-password-reset white p-4 card-panel">
            <div class="container">
                <div class="banner-success-wrapper">
                    <h2 class="banner-success text-center">Signed Up Successfully</h2>
                    <h5 style="text-align: center">Please check your email: <code><?= $model->email ?></code> to verify your account.</h5>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="container">
    <div class="guest-copyright">
        <span>copyright©clairemarketing 2017-2018</span>
        <span class="floated-right">support@clairemarketing.com</span>
    </div>
</div>
