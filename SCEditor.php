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
    public function init()
    {
        parent::init();
        $this->initOptions();
    }
    
    public function run()
    {
        if ($this->hasModel()) {
            echo Html::activeTextarea($this->model, $this->attribute, $this->options);
        } else {
            echo Html::textarea($this->name, $this->value, $this->options);
        }
        
        $this->registerPlugin();
    }
    
    protected function registerPlugin()
    {
        $js = [];
        
        $view = $this->getView();
        
        SCEditorWidgetAsset::register($view);
        
        $id = $this->options['id'];
        
        $options = $this->clientOptions !== false && !empty($this->clientOptions)
            ? Json::encode($this->clientOptions)
            : '{}';
        
        $js[] = "SCEDITOR.replace('$id', $options);";
        
        $view->registerJs(implode("\n", $js));
    }
}
