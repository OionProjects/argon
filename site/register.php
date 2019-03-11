<?php 

use yii\helpers\Html;
use yii\bootstrap\ActiveForm;
use yii\captcha\Captcha;

$this->title="Register";

$fieldOptions1 = [
    'options' => ['class' => 'form-group has-feedback'],
    'inputTemplate' => "{input}<span class='glyphicon glyphicon-envelope form-control-feedback'></span>"
];

$fieldOptions2 = [
    'options' => ['class' => 'form-group has-feedback'],
    'inputTemplate' => "{input}<span class='glyphicon glyphicon-user form-control-feedback'></span>"
];

$fieldOptions3 = [
    'options' => ['class' => 'form-group has-feedback'],
    'inputTemplate' => "{input}<span class='glyphicon glyphicon-lock form-control-feedback'></span>"
];

?>

<div class="container registration">
    <div class="full-width">
        <div class="form-container-register">
            <h1>Register an Account</h1>
            
            <?php $form = ActiveForm::begin(['id' => 'register-form']); ?>
            <div class="user-cred">
            
                <div class="user-field">
                    <?= $form
                        ->field($model, 'email', $fieldOptions1)
                        ->label(false)
                        ->textInput(['placeholder' => $model->getAttributeLabel('email'),'class'=>'user-login']) ?>
                </div>

                <div class="user-field">
                    <?= $form
                        ->field($model, 'username', $fieldOptions2)
                        ->label(false)
                        ->textInput(['placeholder' => $model->getAttributeLabel('username'),'class'=>'user-login']) ?>
                </div>

                <div class="user-field">
                    <?= $form
                        ->field($model, 'password', $fieldOptions3)
                        ->label(false)
                        ->passwordInput(['placeholder' => $model->getAttributeLabel('password'),'class'=>'user-login']) ?>
                </div>

                <div class="user-field">
                    <?= $form
                        ->field($model, 'verifypassword', $fieldOptions3)
                        ->label(false)
                        ->passwordInput(['placeholder' => $model->getAttributeLabel('verifypassword'),'class'=>'user-login']) ?>
                </div> 
               
                <div class="clear"></div>
                <?= Html::submitButton('Register', ['class' => 'button', 'name' => 'register-button']) ?>
            </div>
            <?php ActiveForm::end(); ?>
            <!-- </form> -->
        </div>
    </div>
</div>
