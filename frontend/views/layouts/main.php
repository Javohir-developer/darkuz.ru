<?php

/* @var $this \yii\web\View */
/* @var $content string */

use yii\helpers\Html;
use yii\helpers\Url;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
use frontend\assets\AppAsset;
use common\widgets\Alert;
use cinghie\multilanguage\widgets\MultiLanguageWidget;

AppAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
    
    <meta http-equiv="X-UA-Compatible" content="IE=edge, chrome=1">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta name="description" content="Блог Elmurodov Javohir о веб-разработке Полезные статьи и информация для разработчиков" />
    <meta name="robots" content="index, follow" />
    <meta name="googlebot" content="index, follow, max-snippet:-1, max-image-preview:large, max-video-preview:-1" />
    <meta name="bingbot" content="index, follow, max-snippet:-1, max-image-preview:large, max-video-preview:-1" />
    <meta name="keywords" content="Javohir, ferlanser, Elmurodov Javohir, darkuz, darkuz.ru, ">

    
    <meta charset="<?= Yii::$app->charset ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta property="og:site_name" content="Darkuz.ru">
    <meta property="og:title" content="Darkuz.ru">
    <meta property="og:locale" content="uz-UZ">
    <meta property="og:type" content="page">
    <meta property="og:url" content="http://Darkuz.ru/">
    <meta property="og:image" content="<?=\yii\helpers\Url::to(["../../css/img/meta.png"], true)?>">
    <meta property="og:description"  content="Backend and Frontend Freelanser">
    <link href="<?=\yii\helpers\Url::to(["../../css/img/meta.png"], true)?>" rel="icon">
    <?php $this->registerCsrfMetaTags() ?>
    <title class="typed" data-typed-items="Darkuz.ru"></title>
    <?php $this->head() ?>
</head>
<body>

<header id="header">
    <div class="d-flex flex-column">

        <div class="profile">
            <img src="<?=\yii\helpers\Url::to(["../../css/img/javohir1.jpg"], true)?>" alt="" class="img-fluid rounded-circle">
            <h1 class="text-light"><a href="<?=\yii\helpers\Url::to(["/site/index"], true)?>"><?php echo \Yii::t('app', 'Эльмуродов Жвохир'); ?></a></h1>
            <div class="social-links mt-3 text-center">


                <a href="https://telegram.me/@Elmurodov_Javohir" class="google-plus">
                    <div class="call-animatione">
                        <i class="bx bxl-telegram" style="padding-top: 9px;"></i>
                    </div>
                </a>
                <a href="https://www.facebook.com/javohir.elmurodov.58" class="facebook">
                    <div class="call-animatione">
                        <i class="bx bxl-facebook" style="padding-top: 9px;"></i>
                    </div>
                </a>
                <a href="https://www.instagram.com/elmurodovjavogir84/" class="instagram">
                    <div class="call-animatione">
                        <i class="bx bxl-instagram" style="padding-top: 9px;"></i>
                    </div>
                </a>
            </div>
        </div>

        <nav class="nav-menu">
            <ul>
                <li class="active"><a href="<?=\yii\helpers\Url::to(["/site/index"], true)?>"><i class="bx bx-home"></i> <span><?php echo \Yii::t('app', 'Главне'); ?></span></a></li>
                <li><a href="#about"><i class="bx bx-user"></i> <span> <span><?php echo \Yii::t('app', 'O себе'); ?></span></a></li>
                <li><a href="#resume"><i class="bx bx-file-blank"></i> <span> <span><?php echo \Yii::t('app', 'Ресуме'); ?></span></a></li>
                <li><a href="#portfolio"><i class="bx bx-book-content"></i> <span><?php echo \Yii::t('app', 'Портфолио'); ?> </a></li>
                <li><a href="#services"><i class="bx bx-server"></i> <span><?php echo \Yii::t('app', 'Блог'); ?> </a></li>
                <li>
                    <?php echo MultiLanguageWidget::widget([
                        'addCurrentLang' => true, // add current lang
                        'calling_controller' => $this->context,
                        'image_type' => 'classic', // classic or rounded
                        'link_home' => true, // true or false
                        'widget_type' => 'classic', // classic or selector
                        'width' => '28'
                    ]); ?>

                </li>

            </ul>
        </nav><!-- .nav-menu -->
        <button type="button" class="mobile-nav-toggle d-xl-none"><i class="icofont-navigation-menu"></i></button>

    </div>
</header><!-- End Header -->


<?php $this->beginBody() ?>
        <?= $content ?>
<?php $this->endBody() ?>



<a href="#" class="back-to-top"><i class="icofont-simple-up"></i></a>
</body>
</html>
<?php $this->endPage() ?>
