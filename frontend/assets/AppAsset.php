<?php

namespace frontend\assets;

use yii\web\AssetBundle;

/**
 * Main frontend application asset bundle.
 */
class AppAsset extends AssetBundle
{
    public $basePath = '@webroot';
    public $baseUrl = '@web';
    public $css = [
        "img/favicon.png",
        "img/apple-touch-icon.png",

        "https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i",

        "css/vendor/bootstrap/css/bootstrap.min.css",
        "css/vendor/icofont/icofont.min.css",
        "css/vendor/boxicons/css/boxicons.min.css",
        "css/vendor/venobox/venobox.css",
        "css/vendor/owl.carousel/assets/owl.carousel.min.css",
        "css/vendor/aos/aos.css",


        "css/css/style.css",
    ];
    public $js = [

        "css/vendor/jquery/jquery.min.js",
        "css/vendor/bootstrap/js/bootstrap.bundle.min.js",
        "css/vendor/jquery.easing/jquery.easing.min.js",
        "css/vendor/php-email-form/validate.js",
        "css/vendor/waypoints/jquery.waypoints.min.js",
        "css/vendor/counterup/counterup.min.js",
        "css/vendor/isotope-layout/isotope.pkgd.min.js",
        "css/vendor/venobox/venobox.min.js",
        "css/vendor/owl.carousel/owl.carousel.min.js",
        "css/vendor/typed.js/typed.min.js",
        "css/vendor/aos/aos.js",
        "https://call.chatra.io/chatra.js",

        "css/js/main.js"

    ];
    public $depends = [
        'yii\web\YiiAsset',
        'yii\bootstrap\BootstrapAsset',
    ];
}
