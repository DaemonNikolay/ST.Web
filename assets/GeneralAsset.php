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
        'https://fonts.googleapis.com/css?family=Questrial',
        'web/customAssets/general/bootstrap/css/bootstrap.min.css',
        'web/customAssets/general/themify/themify-icons.css',
        'web/customAssets/general/css/animate.css',
        'web/customAssets/general/css/animsition.css',
        'web/customAssets/general/css/app.css',
        'web/customAssets/general/css/custom_style.css',
        'web/customAssets/general/css/jquery.fullpage.css',
        'web/customAssets/general/chocolat/css/chocolat.css',
    ];
    public $js = [
        'web/customAssets/general/js/jquery-1.11.3.min.js',
        'web/customAssets/general/js/jquery.fullpage.js',
        'web/customAssets/general/js/animsition.min.js',
        'web/customAssets/general/js/scroll.js',
        'web/customAssets/general/js/fastclick.js',
        'web/customAssets/general/js/app.js',
        'web/customAssets/general/chocolat/js/jquery.chocolat.js',
    ];
    public $depends = [
        'yii\web\YiiAsset',
    ];
}