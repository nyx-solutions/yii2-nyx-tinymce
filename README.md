Yii PHP Framework Version 2 / NOX TinyMCE Widget
================================================

Renders a TinyMCE WYSIWYG text editor plugin widget. Inspired by [PendalF89/yii2-tinymce](https://github.com/PendalF89/yii2-tinymce) extension.

[![Latest Stable Version](https://poser.pugx.org/nox-it/yii2-nox-tinymce/v/stable)](https://packagist.org/packages/nox-it/yii2-nox-tinymce)
[![Total Downloads](https://poser.pugx.org/nox-it/yii2-nox-tinymce/downloads)](https://packagist.org/packages/nox-it/yii2-nox-tinymce)
[![Latest Unstable Version](https://poser.pugx.org/nox-it/yii2-nox-tinymce/v/unstable)](https://packagist.org/packages/nox-it/yii2-nox-tinymce)
[![License](https://poser.pugx.org/nox-it/yii2-nox-tinymce/license)](https://packagist.org/packages/nox-it/yii2-nox-tinymce)
[![Monthly Downloads](https://poser.pugx.org/nox-it/yii2-nox-tinymce/d/monthly)](https://packagist.org/packages/nox-it/yii2-nox-tinymce)
[![Daily Downloads](https://poser.pugx.org/nox-it/yii2-nox-tinymce/d/daily)](https://packagist.org/packages/nox-it/yii2-nox-tinymce)
[![composer.lock](https://poser.pugx.org/nox-it/yii2-nox-tinymce/composerlock)](https://packagist.org/packages/nox-it/yii2-nox-tinymce)

## Installation

The preferred way to install this extension is through [composer](http://getcomposer.org/download/).

* Either run

```bash
php composer.phar require --prefer-dist "nox-it/yii2-nox-tinymce" "*"
```

or add

```json
"nox-it/yii2-nox-tinymce": "*"
```

to the `require` section of your application's `composer.json` file.

## Usage

In the view files you can use:

```php
<?= $form->field($model, 'text')->widget(
        \nox\widgets\tinymce\TinyMce::className(), [
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

**yii2-nox-tinymce** is released under the BSD 3-Clause License. See the bundled `LICENSE.md` for details.

![Yii2](https://img.shields.io/badge/Powered_by-Yii_Framework-green.svg?style=flat)
