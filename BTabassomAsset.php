<?php

namespace aki\persianfont;

use Yii;

Yii::setAlias('@persianfonts', __DIR__.DIRECTORY_SEPARATOR.'fonts');

/**
 * @author Akbar Joudi <akbar.joody@gmail.com>
 */
class BTabassomAsset extends \yii\web\AssetBundle
{
    public $sourcePath = '@persianfonts';
    public $css = [
        'BTabassom.css',
    ];
}
