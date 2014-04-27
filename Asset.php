<?php
/**
 * Created by PhpStorm.
 * User: Harry
 * Date: 4/27/14
 * Time: 1:11 PM
 */

namespace harrytang\dotdotdot;


use yii\web\AssetBundle;

class Asset extends AssetBundle
{
    public $sourcePath = '@vendor/harrytang/yii2-dotdotdot/dotdotdot/src/js';
    public $js = [
        'jquery.dotdotdot.min.js'
    ];
    public $depends = [
        'yii\web\JqueryAsset',
    ];

} 