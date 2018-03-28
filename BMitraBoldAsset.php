<?php
namespace aki\persianfont;

use Yii;

Yii::setAlias('@persianfonts', __DIR__.DIRECTORY_SEPARATOR.'fonts');

/**
 * Description of BMitraBoldAsset
 *
 * @author Akbar Joudi <akbar.joody@gmail.com>
 */
class BMitraBoldAsset extends \yii\web\AssetBundle{
    public $sourcePath = '@persianfonts';
    public $css = [
        'BMitraBold.css',
    ];
}
