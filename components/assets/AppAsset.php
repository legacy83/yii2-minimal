<?php

namespace app\components\assets;

use yii\web\AssetBundle;

/**
 * Class AppAsset
 *
 * @package app\components\assets
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