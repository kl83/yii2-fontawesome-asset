<?php
namespace kl83\assets;

class FontawesomeAsset extends \yii\web\AssetBundle
{
    public $sourcePath = '@bower/font-awesome';
    public function init()
    {
        $this->css = [ 'css/font-awesome'.( YII_DEBUG ? '.min' : '' ).'.css' ];
    }
}
