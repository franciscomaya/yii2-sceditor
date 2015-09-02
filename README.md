SCEditor Extension for Yii 2.0 Framework
========================================
SCEditor, a lightweight WYSIWYG BBCode & HTML editor extension for Yii 2.0 Framework

Installation
------------

The preferred way to install this extension is through [composer](http://getcomposer.org/download/).

Either run

```
php composer.phar require franciscomaya/yii2-sceditor:dev-master
```

or add

```
"franciscomaya/yii2-sceditor" : "dev-master"
```

to the require section of your `composer.json` file.


Usage
-----

Once the extension is installed, simply use it in your code by  :

```php
use franciscomaya\sceditor\SCEditor;

<?= $form->field($model, 'text')->widget(SCEditor::className(), [
        'options' => ['rows' => 6],
        'clientOptions' => [
            'plugins' => 'bbcode',
        ]
    ]) ?>
```


Further Information
-----

Please, check the [SCEditor plugin site](http://www.sceditor.com/documentation/options/) documentation for further information about its configuration options.