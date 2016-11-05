<?php

namespace app\assets;

use yii\web\AssetBundle;

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
        'resources/style.css',
    ];
    public $js = [
        'resources/script.js',
    ];
}