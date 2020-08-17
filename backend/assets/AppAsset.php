<?php

namespace backend\assets;

use yii\web\AssetBundle;

/**
 * Main backend application asset bundle.
 */
class AppAsset extends AssetBundle
{
    public $basePath = '@webroot';
    public $baseUrl = '@web';
    public $css = [
        "css/plugins/fontawesome-free/css/all.min.css",
        "css/https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css",
        "css/plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css",
        "css/plugins/icheck-bootstrap/icheck-bootstrap.min.css",
        "css/plugins/jqvmap/jqvmap.min.css",
        "css/dist/css/adminlte.min.css",
        "css/plugins/overlayScrollbars/css/OverlayScrollbars.min.css",
        "css/plugins/daterangepicker/daterangepicker.css",
        "css/plugins/summernote/summernote-bs4.css",
        "https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700",
        "css/dist/style.css"
    ];
    public $js = [
        "css/plugins/bootstrap/js/bootstrap.bundle.min.js",
        "css/plugins/chart.js/Chart.min.js",
        "css/plugins/sparklines/sparkline.js",
        "css/plugins/jqvmap/jquery.vmap.min.js",
        "css/plugins/jqvmap/maps/jquery.vmap.usa.js",
        "css/plugins/jquery-knob/jquery.knob.min.js",
        "css/plugins/moment/moment.min.js",
        "css/plugins/daterangepicker/daterangepicker.js",
        "css/plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js",
        "css/plugins/summernote/summernote-bs4.min.js",
        "css/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js",
        "css/dist/js/adminlte.js",
        "css/dist/js/pages/dashboard.js",
        "css/dist/js/demo.js",

    ];
    public $depends = [
        'yii\web\YiiAsset',
        'yii\bootstrap\BootstrapAsset',
    ];
}
