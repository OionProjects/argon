<?php
/**
 * Created by PhpStorm.
 * User: ROG
 * Date: 3/10/2019
 * Time: 2:45 PM
 */

namespace bolante93\bols;


use yii\base\Widget;
use yii\bootstrap\ActiveForm;
use yii\bootstrap4\Html;

/**
 * Class ArgonFieldWidget
 * @package common\widgets\argon
 * @property ActiveForm $form
 */
class ArgonFieldWidget extends Widget {
	//public $message;
	public $form;
	public $model;
	public $attribute;

	public function __construct( array $config = [] ) {
		$this->form = (isset( $config['form']))?  $config['form']: null;
		$this->model = (isset( $config['model']))?  $config['model']: null;
		//$this->model = $config['model'];
		parent::__construct( $config );
	}
	public function init() {parent::init();}
	public function run() {}

	/*
	 * Renders a custom form text field for Argon Theme.
	 */
	public function textInput( $attribute = '', $icon = '',$options = [] ){
		$fieldOption = [ 'options' => ['class' => 'form-group has-feedback '],
			'errorOptions'=>['tag'=>'div','class'=>'alert alert-warning'],
			'inputTemplate' => '<div class="input-group input-group-alternative"> <div class="input-group-prepend"><span class="input-group-text"><i class="ni ni-'.$icon.'"></i></span></div>{input}</div>',
		];
		return $this->form->field($this->model, $attribute, $fieldOption)->textInput(['autofocus' => true,'placeholder'=>$this->model->getAttributeLabel($attribute)])->label(false);
	}

	/*
	 * Renders a custom form password field for Argon Theme.
	 */
	public function passwordInput( $attribute = '', $icon = '',$options = [] ){
		$fieldOption = [ 'options' => ['class' => 'form-group has-feedback '],
             'errorOptions'=>['tag'=>'div','class'=>'alert alert-warning'],
             'inputTemplate' => '<div class="input-group input-group-alternative"> <div class="input-group-prepend"><span class="input-group-text"><i class="ni ni-'.$icon.'"></i></span></div>{input}</div>',
		];
		return $this->form->field($this->model, $attribute, $fieldOption)->passwordInput(['autofocus' => true,'placeholder'=>$this->model->getAttributeLabel($attribute)])->label(false);
	}

	/*
	 * Renders a custom form text field for Argon Theme.
	 */
	public function checkbox( $attribute = '', $options = [] ){
		$label = '<label class="custom-control-label"> <span class="text-muted">Remember me</span></label>';
		$fieldOption = [ 'options' => ['class' => 'form-group has-feedback custom-control custom-control-alternative custom-checkbox'],
						  'template'=>'{input}{label}',
		                 //'inputTemplate' => '{input}',
		                 //'checkboxTemplate' => '<div class="custom-control custom-control-alternative custom-checkbox">{input}{beginLabel}</div>',
		];
		return $this->form->field($this->model, $attribute, $fieldOption)->checkbox(['class'=>'custom-control-input'],false)->label(null,['class'=>'custom-control-label']);
	}
}