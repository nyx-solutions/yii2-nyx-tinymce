Yii PHP Framework Version 2 / NYX TinyMCE Widget
================================================

Renders a TinyMCE WYSIWYG text editor plugin widget. Inspired by [PendalF89/yii2-tinymce](https://github.com/PendalF89/yii2-tinymce) extension.

[![Latest Stable Version](https://poser.pugx.org/nyx-solutions/yii2-nyx-tinymce/v/stable)](https://packagist.org/packages/nyx-solutions/yii2-nyx-tinymce)
[![Total Downloads](https://poser.pugx.org/nyx-solutions/yii2-nyx-tinymce/downloads)](https://packagist.org/packages/nyx-solutions/yii2-nyx-tinymce)
[![Latest Unstable Version](https://poser.pugx.org/nyx-solutions/yii2-nyx-tinymce/v/unstable)](https://packagist.org/packages/nyx-solutions/yii2-nyx-tinymce)
[![License](https://poser.pugx.org/nyx-solutions/yii2-nyx-tinymce/license)](https://packagist.org/packages/nyx-solutions/yii2-nyx-tinymce)
[![Monthly Downloads](https://poser.pugx.org/nyx-solutions/yii2-nyx-tinymce/d/monthly)](https://packagist.org/packages/nyx-solutions/yii2-nyx-tinymce)
[![Daily Downloads](https://poser.pugx.org/nyx-solutions/yii2-nyx-tinymce/d/daily)](https://packagist.org/packages/nyx-solutions/yii2-nyx-tinymce)
[![composer.lock](https://poser.pugx.org/nyx-solutions/yii2-nyx-tinymce/composerlock)](https://packagist.org/packages/nyx-solutions/yii2-nyx-tinymce)

## Installation

The preferred way to install this extension is through [composer](http://getcomposer.org/download/).

* Either run

```bash
php composer.phar require --prefer-dist "nyx-solutions/yii2-nyx-tinymce" "*"
```

or add

```json
"nyx-solutions/yii2-nyx-tinymce": "*"
```

to the `require` section of your application's `composer.json` file.

## Usage

In the view files you can use:

```php
<?= $form->field($model, 'text')->widget(
        \nyx\widgets\tinymce\TinyMce::className(), [
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

## License

**yii2-nyx-tinymce** is released under the BSD 3-Clause License. See the bundled `LICENSE.md` for details.

![Yii2](https://img.shields.io/badge/Powered_by-Yii_Framework-green.svg?style=flat)
