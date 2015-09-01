<?php

namespace franciscomaya\sceditor;

use yii\helpers\Html;
use yii\helpers\Json;
use yii\widgets\InputWidget;

/**
 * This is just an example.
 */
class SCEditor extends InputWidget
{
    public $clientOptions = [];
    
    public function init()
    {
        parent::init();
    }
    
    public function run()
    {
        if ($this->hasModel()) {
            echo Html::activeTextarea($this->model, $this->attribute, $this->options);
        } else {
            echo Html::textarea($this->name, $this->value, $this->options);
        }
        
        $this->registerClientScript();
    }
    
    protected function registerClientScript()
    {
        $js = [];
        
        $view = $this->getView();
        
        $prueba = SCEditorWidgetAsset::register($view);
        
        $id = $this->options['id'];
        
        $this->clientOptions['filebrowserUploadUrl'] = $prueba->basePath;
        
        $options = $this->clientOptions !== false && !empty($this->clientOptions)
                ? Json::encode($this->clientOptions)
                : '{}';
        
        $js[] = "$('#{$id}').sceditor({$options});";
        
        $view->registerJs(implode("\n", $js));
    }
}
