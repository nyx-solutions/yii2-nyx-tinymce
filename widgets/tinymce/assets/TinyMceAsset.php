<?php

    namespace nox\widgets\tinymce\assets;

    use yii\web\AssetBundle;

    /**
     * Class TinyMceAsset
     *
     * @package nox\widgets\tinymce\assets
     */
    class TinyMceAsset extends AssetBundle
    {
        /**
         * @var string
         */
        public $sourcePath = '@vendor/tinymce/tinymce';

        /**
         * @var array
         */
        public $js = ['tinymce.jquery.min.js'];

        /**
         * @var array
         */
        public $depends = ['yii\web\JqueryAsset'];
    }
