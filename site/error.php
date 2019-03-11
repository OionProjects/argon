<?php

use yii\helpers\Html;
use yii\helpers\Url;

/* @var $this yii\web\View */
/* @var $name string */
/* @var $message string */
/* @var $exception Exception */

$this->title = $name;
?>
<div class="guest-ui">
    <?php if(Yii::$app->user->isGuest){ ?>
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
    <?php } ?>
    <div class="guest pt-5">
        <div class="col-md-12 error-page">
            <h2 class="headline text-info"><i class="fa fa-warning text-yellow"></i></h2>
            <div class="error-content">
                <h3><?= $name ?></h3>
                <p>
                    <?= nl2br(Html::encode($message)) ?>
                </p>
                <p>
                    The above error occurred while the Web server was processing your request.
                    Please contact us if you think this is a server error. Thank you.
                    Meanwhile, you may <a href='<?= Yii::$app->homeUrl ?>'>return to dashboard</a> or try using the search
                    form.
                </p>
                <a class="btn btn-primary" href="/">Take me to home Page.</a>
                <form class='search-form'>
                    <div class='input-group'>
                        <input type="text" name="search" class='form-control' placeholder="Search"/>

                        <div class="input-group-btn">
                            <button type="submit" name="submit" class="btn btn-primary"><i class="fa fa-search"></i>
                            </button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
