<?php

namespace bilginnet\cropper\bootstrap4;


use yii\web\AssetBundle;
use yii\web\View;

class CropperReadyAsset extends AssetBundle
{
    public $sourcePath = '@bilginnet/cropper/bootstrap4/assets';
    public $jsOptions = ['position' => View::POS_READY];
    public $css = [
        'cropper.css',
    ];
    public $js = [
        'cropper.js'
    ];
    public $depends = [
        'yii\web\YiiAsset',
        'yii\bootstrap4\BootstrapAsset',
        'yii\bootstrap4\BootstrapPluginAsset',
    ];
}