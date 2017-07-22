<?php

namespace app\assets;

use yii\web\AssetBundle;

/**
 * @author Kovcheq <Kovcheq@gmail.com>
 * @since 2.0
 */
class HomeAsset extends AssetBundle
{
    public $basePath = '@webroot';
    public $baseUrl = '@web';
    public $css = [
    ];
    public $js = [
        'js/home.js',
    ];
    public $depends = [
        'yii\web\YiiAsset',
    ];
}
