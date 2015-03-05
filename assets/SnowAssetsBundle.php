<?php
/**
 * Created by PhpStorm.
 * User: TimmyKsu
 * Date: 23.02.2015
 * Time: 20:32
 */

namespace app\assets;


use yii\web\AssetBundle;

class SnowAssetsBundle extends AssetBundle {
    public $sourcePath = '@app/assets/snow';
    public $css = ['snow.css'];
    public $depends = ['app\assets\ApplicationUiAssetBundle'];
} 