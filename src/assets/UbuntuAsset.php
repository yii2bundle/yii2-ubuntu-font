<?php

namespace yii2lab\ubuntu_font\assets;

use yii\web\AssetBundle;
use yii2rails\extension\common\helpers\Helper;
use yii2rails\extension\yii\helpers\Html;

class UbuntuAsset extends AssetBundle
{
	public $sourcePath = '@yii2lab/ubuntu_font/dist';
	public $css = [
		'styles.css',
	];

	public function init()
    {
        parent::init();
        Html::setFont('ubuntu');
    }
}
