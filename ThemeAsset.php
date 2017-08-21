<?php
/**
 * @link https://github.com/vin-yang/yii2-echarts
 * @copyright Copyright (c) 2017, Cosmo
 * @license http://opensource.org/licenses/BSD-3-Clause
 */

namespace vin\echarts;

use yii\web\AssetBundle;

/**
 * Theme asset
 *
 * @author Cosmo <yangwenpeng1314521@gmail.com>
 */
class ThemeAsset extends AssetBundle
{
    public $sourcePath = '@bower/echarts/theme';

    public $depends = [
        'vin\echarts\EChartsAsset',
    ];
}