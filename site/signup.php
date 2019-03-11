<?php

/* @var $this yii\web\View */
use yii\helpers\Html;
use yii\bootstrap\ActiveForm;
use yii\helpers\Url;
if(Yii::$app->user->isGuest){
	//frontend\assets\FormAsset::register($this);
	//$this->registerJsFile('@web/js/login/verification.js');
}

\yii\bootstrap\BootstrapAsset::register($this);

$this->params['breadcrumbs'][] = $this->title;

$fieldOptions1 = [
	'options' => ['class' => 'form-group has-feedback input-field'],
	'template' => '{input}{label}',
	'inputTemplate' => '<i class="material-icons prefix">mail_outline</i>',
	'inputOptions' => ['autocomplete' => 'new-password']
];

$fieldOptions2 = [
	'options' => ['class' => 'form-group has-feedback input-field'],
	'template' => '{input}{label}{error}',
	'inputTemplate' => '<i class="material-icons prefix">person_outline</i>{input}',
	'inputOptions' => ['autocomplete' => 'new-password']
];

$fieldOptions3 = [
	'options' => ['class' => 'form-group has-feedback input-field'],
	'template' => '{input}{label}',
	'inputTemplate' => '<i class="material-icons prefix">lock</i>{input}',
	'inputOptions' => ['autocomplete' => 'new-password']
];

$loginOptions1 = [
	'options' => ['class' => 'form-group has-feedback input-field'],
	'template' => '{input}{label}',
	'inputTemplate' => '<i class="material-icons prefix">person_outline</i>{input}',
	'inputOptions' => ['autocomplete' => 'new-password']
];

$loginOptions2 = [
	'options' => ['class' => 'form-group has-feedback input-field'],
	'template' => '{input}{label}',
	'inputTemplate' => '<i class="material-icons prefix">lock</i>{input}',
	'inputOptions' => ['autocomplete' => 'new-password']
];
?>
<?php $this->title = 'Sign in | Sign up'; ?>
<div class="guest-ui">
    <!-- <div class="user-index-content">
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
    </div> -->
    <div class="header-bar valign-wrapper pos-rel">
        <!-- <a class=""><i class="material-icons">menu</i></a> -->
        <img class="logo" src="/images/logo/Clair-logo-A-transparent.png">
        <ul class="pull-right user-profile-link mb-0">

        </ul>
        <div class="clearfix"></div>

    </div>

    <div class="guest pt-5">
        <div class="container">
            <div class="text-right">
                <div class="form-login centered ">

                    <div class="p-4 text-left">
                        <div id="si_c" class="guest-login-description ">
                            <h3 class=""> Welcome Visitor! </h3>
                            <h5 class="btm-spacing-20"> Signup with Claire </h5>
                        </div>
                        <div id="su_c" class="guest-login-description false">
                            <h3 class="">Create an account </h3>
                            <h5 class="btm-spacing-20">Sign up now! It's free.</h5>
                        </div>
                    </div>

                    <nav class="blue">
                        <div class="nav-wrapper pl-3">
                            <ul id="nav-mobile" class="center hide-on-med-and-down">
                                <li>
                                    <a id="btn-show-login" href="/site/login" class="text-uppercase"> Login </a>
                                </li>
                                <li>|</li>
                                <li class="active">
                                    <a id="btn-show-register" href="/site/signup" class="text-uppercase"><strong>Sign Up</strong></a>
                                </li>
                            </ul>
                        </div>
                    </nav>

                    <div class="p-4">
                        <!-- ----- Form Register ------ -->
                        <div id="register-content" class="true text-left">
                            <?php $form = ActiveForm::begin(['id' => 'register-form', 'enableClientValidation' => false]); ?>
                            <div class="user-cred">
                                <div class="user-field inline">
                                    <?= $form->field($model, 'username')->textInput(['placeholder'=>'Username'])->label(false) ?>
                                </div>
                                <div class="user-field">
                                    <?= $form->field($model, 'email')->textInput(['placeholder'=>'Email'])->label(false) ?>
                                </div>
                                <div class="user-field inline">
                                    <?= $form->field($model, 'password')->passwordInput(['placeholder'=>'Password'])->label(false) ?>
                                </div>
                                <div class="clear"></div>
                                <div class="user-field mb-5">
                                    <?= $form->field($model, 'verifypassword')->passwordInput(['placeholder'=>'Verify Password'])->label(false) ?>
                                </div>
                                <div class="clear"></div>
                                <?= Html::submitButton('Get Started', ['class' => 'btn btn-primary', 'name' => 'register-button']) ?>
                            </div>
                            <?php ActiveForm::end(); ?>
                        </div>
                    </div>
                    <!-- ----- Form Register ------ -->
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





