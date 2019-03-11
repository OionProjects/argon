<?php

namespace bols\argon\assets;

use yii\web\AssetBundle;

/**
 * Main frontend application asset bundle.
 */
class ArgonAssets extends AssetBundle
{
	//public $basePath = '@frontend/views/argon/web';
	public $sourcePath = '@vendor/bolante93/bols/argon/web';
	//public $baseUrl = '@web';
	public $css = [
		'https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700',
		'libs/nucleo/css/nucleo.css',
		'libs/@fortawesome/fontawesome-free/css/all.min.css',
		'css/argon.css',
		'css/site.css',
	];
	public $js = [
		'libs/bootstrap/dist/js/bootstrap.bundle.min.js',
		'libs/chart.js/dist/Chart.min.js',
		'libs/chart.js/dist/Chart.extension.js',
		'js/argon.js?v=1.0.0',
	];
	public $depends = [
		'yii\web\YiiAsset',
		//'yii\bootstrap4\BootstrapAsset',
	];
}
