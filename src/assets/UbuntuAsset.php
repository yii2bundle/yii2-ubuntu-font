<?php

namespace yii2lab\ubuntu_font\assets;

use yii\web\AssetBundle;
use yii2lab\extension\common\helpers\Helper;
use yii2lab\extension\yii\helpers\Html;

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
