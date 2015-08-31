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
        
        SCEditorWidgetAsset::register($view);
        
        $id = $this->options['id'];
        
        $js[] = "$(\"#{$id}\").sceditor({
                plugins: \"bbcode\",
            });";
        
        //$view->registerJs(implode("\n", $js));
    }
}
