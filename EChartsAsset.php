<?php
/**
 * @link https://github.com/vin-yang/yii2-echarts
 * @copyright Copyright (c) 2017, Cosmo
 * @license http://opensource.org/licenses/BSD-3-Clause
 */

namespace vin\echarts;

use yii\web\AssetBundle;
use yii\base\InvalidConfigException;

/**
 * ECharts asset
 *
 * @author Cosmo <yangwenpeng1314521@gmail.com>
 */
class EChartsAsset extends AssetBundle
{
    /**
     * @inheritdoc
     */
    public $sourcePath = '@bower/echarts/dist';

    /**
     * Initializes the bundle.
     */
    public function init()
    {
        if (empty($this->js)) {
            switch (ECharts::$dist) {
                case ECharts::DIST_FULL:
                    $this->js = YII_DEBUG ? ['echarts.js'] : ['echarts.min.js'];
                    break;
                case ECharts::DIST_COMMON:
                    $this->js = YII_DEBUG ? ['echarts.common.js'] : ['echarts.common.min.js'];
                    break;
                case ECharts::DIST_SIMPLE:
                    $this->js = YII_DEBUG ? ['echarts.simple.js'] : ['echarts.simple.min.js'];
                    break;
                default:
                    throw new InvalidConfigException('The "dist" is not valid.');
            }
        }

        parent::init();
    }
}