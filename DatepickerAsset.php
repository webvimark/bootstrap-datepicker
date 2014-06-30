<?php

namespace app\webvimark\extensions\BootstrapDatepicker;

use yii\web\AssetBundle;

class DatepickerAsset extends AssetBundle
{
	public function init()
	{
		$this->sourcePath = __DIR__ . '/assets';
		$this->js = ['bootstrap-datepicker.js'];
		$this->css = ['datepicker.css'];

		parent::init();
	}
}