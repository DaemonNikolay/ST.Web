<?php
/**
 * Created by PhpStorm.
 * User: Nikulux
 * Date: 017 17.11.18
 * Time: 0:51
 */

namespace app\assets;


use yii\web\AssetBundle;

class GeneralAsset extends AssetBundle
{
    public $basePath = '@webroot';
    public $baseUrl = '@web';
    public $css = [
        'customAsset/general/css/style.css',
    ];
    public $js = [
        'customAsset/general/js/script.js',
    ];
    public $depends = [
        'yii\web\YiiAsset',
        'yii\bootstrap\BootstrapAsset',
    ];
}