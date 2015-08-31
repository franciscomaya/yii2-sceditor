<?php

namespace franciscomaya\sceditor;

use yii\web\AssetBundle;

class SCEditorWidgetAsset extends AssetBundle
{
    public $depends = [
        'franciscomaya\sceditor\SCEditorAsset'
    ];
    
    /*public $js = [
        'franciscomaya-sceditor.widget.js'
    ];*/
    
    public function init()
    {
        $this->sourcePath = __DIR__ . '/assets';
        parent::init();
    }
}