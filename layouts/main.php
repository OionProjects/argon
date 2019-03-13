<?php

use frontend\assets\AppAsset;
use kartik\icons\Icon;
use yii\bootstrap\Modal;
use yii\helpers\Html;
/* @var $this \yii\web\View */
/* @var $content string */

/**
 * Do not use this code in your template. Remove it. 
 * Instead, use the code  $this->layout = '//main-login'; in your controller.
 */
    //echo $this->render( 'main-login', ['content' => $content] );
?>
<?php
    $bundle =  \bols\argon\assets\ArgonAssets::register($this);
    //$bundle = bols\argon\
    $this->beginPage()
?>
    <!DOCTYPE html>
    <html lang="<?= Yii::$app->language ?>">
    <head>
        <meta charset="<?= Yii::$app->charset ?>">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <?php $this->registerCsrfMetaTags() ?>
        <title><?= Html::encode($this->title) ?></title>
        <?php $this->head() ?>
    </head>
    <body class="<?= $this->context->bodyClass; ?>">
    <?php $this->beginBody() ?>
        <?php
            if( !Yii::$app->user->isGuest ){
	            echo $this->render( 'left.php' );
            }
        ?>

        <div class="main-content">
            <?php if( !Yii::$app->user->isGuest ): ?>
	            <?= $this->render( 'header.php' ); ?>
            <?php endif; ?>
            <?= $this->render( 'content.php',['content'=>$content,'bundle'=>$bundle]) ?>
        </div>

    </body>
    <?php $this->endBody() ?>
    </html>
    <?php $this->endPage() ?>


