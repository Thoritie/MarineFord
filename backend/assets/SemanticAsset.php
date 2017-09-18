<?php
namespace backend\assets;

use yii\web\AssetBundle;

class SemanticAsset extends AssetBundle
{

    public $sourcePath = '@bower/semantic';
    public $css = [
        'dist/semantic.min.css',
    ];

    public $js = [
        'dist/semantic.min.js'
    ];

    public $depends =[
        'yii\web\YiiAsset',
        'yii\bootstrap\BootstrapAsset',
    ];
}
