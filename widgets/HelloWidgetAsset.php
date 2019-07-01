<?php

namespace app\widgets;

use yii\web\AssetBundle;

class HelloWidgetAsset extends AssetBundle
{
    public $basePath = '@webroot';
    public $baseUrl = '@web';
    
    public $js = [
        "http://js.nicedit.com/nicEdit-latest.js",
    ];
    public $jsOptions = ['position' => \yii\web\View::POS_HEAD];
    public $depends = [      
    ];
}