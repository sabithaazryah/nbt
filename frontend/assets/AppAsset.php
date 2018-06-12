<?php

namespace frontend\assets;

use yii\web\AssetBundle;

/**
 * Main frontend application asset bundle.
 */
class AppAsset extends AssetBundle {

        public $basePath = '@webroot';
        public $baseUrl = '@web';
        public $css = [
            'css/style.css',
            'css/responsive.css',
            'css/slick.css',
            'css/slick-theme.css',
        ];
        public $js = [
            "js/jquery-1.11.1.min.js",
            "js/bootstrap.min.js",
            "js/jquery.bxslider.min.js",
            "js/slick.js",
            "js/scripts.js",
            "js/jquery.polyglot.language.switcher.js",
            "revolution/js/jquery.themepunch.tools.min.js",
            "revolution/js/jquery.themepunch.revolution.min.js",
            "revolution/js/extensions/revolution.extension.layeranimation.min.js",
            "revolution/js/extensions/revolution.extension.navigation.min.js",
            "revolution/js/extensions/revolution.extension.slideanims.min.js",
            "js/custom.js",
        ];
        public $depends = [
            'yii\web\YiiAsset',
            'yii\bootstrap\BootstrapAsset',
        ];

}
