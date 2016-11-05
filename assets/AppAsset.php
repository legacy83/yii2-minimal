<?php

namespace app\assets;

use yii\web\AssetBundle;
use yii\web\YiiAsset;

/**
 * Class AppAsset
 *
 * @package app\assets
 */
class AppAsset extends AssetBundle
{
    public $basePath = '@webroot';
    public $baseUrl = '@web';
    public $css = [
        'css/site.css',
    ];
    public $js = [
    ];
    public $depends = [
        'yii\web\YiiAsset',
        'app\assets\BowerAsset',
    ];
}