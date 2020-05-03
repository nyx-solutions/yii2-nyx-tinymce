<?php

    namespace nox\widgets\tinymce\assets;

    use yii\web\AssetBundle;

    /**
     * Class LanguageAsset
     */
    class LanguageAsset extends AssetBundle
    {
        /**
         * @inheritdoc
         */
        public function init()
        {
            $this->sourcePath = '@vendor/nox-it/yii2-nox-tinymce/tinymce/assets/messages';

            parent::init();
        }
    }
