<?php

namespace franciscomaya\sceditor;

use yii\web\AssetBundle;

class SCEditorAsset extends AssetBundle
{
    public $js = [
        'minified/jquery.sceditor.bbcode.min.js',
        'adapters/jquery.js'
    ];
    
    public $css = [
        'minified/themes/default.min.css',
    ];
    
    public $depends = [
        'yii\web\YiiAsset',
        'yii\web\JqueryAsset',
        'yii\bootstrap\BootstrapAsset',
    ];
    
    public function init()
    {
        $this->sourcePath = __DIR__ . '/assets/sceditor';
        parent::init();
    }
}