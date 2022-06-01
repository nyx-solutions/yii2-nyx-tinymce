<?php

    namespace nyx\widgets\tinymce\assets;

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
            $this->sourcePath = '@vendor/nyx-solutions/yii2-nyx-tinymce/tinymce/assets/messages';

            parent::init();
        }
    }
