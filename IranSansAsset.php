<?php

namespace aki\persianfont;

use Yii;

Yii::setAlias('@persianfonts', __DIR__.DIRECTORY_SEPARATOR.'fonts');

/**
 * @author Akbar Joudi <akbar.joody@gmail.com>
 */
class IranSansAsset extends \yii\web\AssetBundle
{
    public $sourcePath = '@persianfonts/iransans';
    public $css = [
        'iransans.css',
    ];
}
