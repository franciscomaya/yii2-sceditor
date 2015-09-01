<?php

namespace franciscomaya\sceditor;

use yii\web\AssetBundle;

class SCEditorLanguageAsset extends AssetBundle
{
    public $idioma = 'es';
    
    public $depends = [
        'franciscomaya\sceditor\SCEditorAsset'
    ];
    
    public $js = [
        '{$idioma}franciscomaya-sceditor.widget.js',
    ];
    
    public function init()
    {
        $this->sourcePath = __DIR__ . '/assets';
        parent::init();
    }
}