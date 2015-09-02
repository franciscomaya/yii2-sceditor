<?php
/**
 * @copyright Copyright (c) 2015, Francisco Maya Sarasty
 * @license http://opensource.org/licenses/BSD-3-Clause
 */
namespace franciscomaya\sceditor;

use yii\web\AssetBundle;

/**
 * SCEditorAsset
 *
 * @author Francisco Maya Sarasty <sarasty@gmail.com>
 * @package franciscomaya\sceditor
 */
class SCEditorAsset extends AssetBundle
{
    public $js = [
        'minified/jquery.sceditor.bbcode.min.js',
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