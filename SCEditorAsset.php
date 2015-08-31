<?php

namespace franciscomaya\ckeditor;

use yii\web\AssetBundle;

class SCEditorAsset extends AssetBundle
{
    public $js = [
        'minified/jquery.sceditor.bbcode.min.js',
        'adapters/jquery.js'
    ];
    
    public $depends = [
        'yii\web\YiiAsset',
        'yii\web\JqueryAsset'
    ];
    
    public function init()
    {
        $this->sourcePath = __DIR__ . '/assets/sceditor';
        parent::init();
    }
}