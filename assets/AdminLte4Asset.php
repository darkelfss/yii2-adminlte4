<?php

namespace darkelfss\adminlte4\assets;

use yii\web\AssetBundle;

class AdminLte4Asset extends AssetBundle
{
    public $sourcePath = '@vendor/darkelfss/adminlte4/dist';
    public $css = [
        'css/adminlte.min.css',
    ];
    public $js = [
        'js/adminlte.min.js',
    ];
    public $depends = [
        'yii\web\YiiAsset',
        'yii\bootstrap5\BootstrapAsset',
    ];
}
