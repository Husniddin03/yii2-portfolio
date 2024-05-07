<?php

namespace frontend\assets;

use yii\web\AssetBundle;

class PortfolioAsset extends AssetBundle
{
    public $basePath = '@webroot/portfolio';
    public $baseUrl = '@web/portfolio';
    public $css = [
        'css/bootstrap.min.css',
        'fontawesome/css/all.min.css',
        'css/templatemo-style.css',
    ];
    public $js = [
        'js/plugins.js',
    ];
}
