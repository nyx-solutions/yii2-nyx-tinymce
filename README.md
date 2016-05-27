Yii PHP Framework Version 2 / NOX TinyMCE Widget
================================================

Renders a TinyMCE WYSIWYG text editor plugin widget. Inspired by [PendalF89/yii2-tinymce](https://github.com/PendalF89/yii2-tinymce) extension.

Installation
------------
The preferred way to install this extension is through [composer](http://getcomposer.org/download/).

Either run

```
php composer.phar require --prefer-dist nox-it/yii2-nox-tinymce "*"
```

or add

```
"nox-it/yii2-nox-tinymce: "*"
```

to the require section of your `composer.json` file.

Usage
------------
In view files:

```php
use nox\widgets\tinymce\TinyMce;

<?= $form->field($model, 'text')->widget(
        TinyMce::className(), [
            'clientOptions' => [
                'language' => 'pt_BR',
                'plugins' => [
                    "advlist autolink lists link charmap print preview anchor",
                    "searchreplace visualblocks code fullscreen",
                    "insertdatetime media table contextmenu paste"
                ],
                'toolbar' => "undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | link image"
            ]
        ]
    );

?>
```

![Yii2](https://img.shields.io/badge/Powered_by-Yii_Framework-green.svg?style=flat)
