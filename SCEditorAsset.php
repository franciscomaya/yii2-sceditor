<?php

namespace franciscomaya\sceditor;

use yii\web\AssetBundle;

class SCEditorAsset extends AssetBundle
{
    public $js = [
        'minified/jquery.sceditor.bbcode.min.js',
        'languages/es.js',
    ];
    
    public $css = [
        'minified/themes/default.min.css',
    ];
    
    public $depends = [
        'yii\web\YiiAsset',
        'yii\web\JqueryAsset',
    ];
    
    public function init()
    {
        $this->sourcePath = __DIR__ . '/assets/sceditor';
        parent::init();
    }
}