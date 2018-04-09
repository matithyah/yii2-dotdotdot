<?php
/**
 * @author Harry Tang <harry@modernkernel.com>
 * @link https://modernkernel.com
 * @copyright Copyright (c) 2016 Modern Kernel
 */

namespace matithyah\dotdotdot;


use yii\web\AssetBundle;

/**
 * Class Asset
 * @package modernkernel\dotdotdot
 */
class Asset extends AssetBundle
{
    public $sourcePath = '@npm/jquery.dotdotdot/src';
    public $js = [
        'jquery.dotdotdot.js'
    ];
    public $depends = [
        'yii\web\JqueryAsset',
    ];

} 
