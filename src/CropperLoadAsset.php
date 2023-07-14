<?php

namespace bilginnet\cropper\bootstrap4;


use yii\web\AssetBundle;
use yii\web\View;

/**
 * @author Ercan Bilgin <bilginnet@gmail.com>
 */
class CropperLoadAsset extends AssetBundle
{
    public $sourcePath = '@bilginnet/cropper/bootstrap4/assets';
    public $jsOptions = ['position' => View::POS_LOAD];
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