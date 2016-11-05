<?php

namespace app\assets;

use yii\web\AssetBundle;

/**
 * Class BowerAsset
 *
 * @package app\assets
 */
class BowerAsset extends AssetBundle
{
    public $sourcePath = '@bower';
    public $css = [
        'bootstrap/dist/css/bootstrap.css',
    ];
    public $js = [
        'bootstrap/dist/js/bootstrap.js',
    ];
    public $depends = [
        'yii\web\JqueryAsset',
    ];
}