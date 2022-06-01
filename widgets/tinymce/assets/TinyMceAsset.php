<?php

    namespace nyx\widgets\tinymce\assets;

    use yii\web\AssetBundle;
    use yii\web\JqueryAsset;

    /**
     * Class TinyMceAsset
     */
    class TinyMceAsset extends AssetBundle
    {
        /**
         * @inheritdoc
         */
        public function init()
        {
            $this->sourcePath = '@vendor/tinymce/tinymce';
            $this->js         = ['tinymce.jquery.min.js'];
            $this->depends    = [JqueryAsset::class];

            parent::init();
        }
    }
