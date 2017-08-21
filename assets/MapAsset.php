<?php
/**
 * @link https://github.com/vin-yang/yii2-echarts
 * @copyright Copyright (c) 2017, Cosmo
 * @license http://opensource.org/licenses/BSD-3-Clause
 */

namespace vin\echarts;

use yii\web\AssetBundle;

/**
 * Map asset
 *
 * @author Cosmo <yangwenpeng1314521@gmail.com>
 */
class MapAsset extends AssetBundle
{
    public $sourcePath = '@bower/echarts/map';

    public $depends = [
        'vin\echarts\EChartsAsset',
    ];
}