<?php
use yii\helpers\Url;
use cinghie\multilanguage\widgets\MultiLanguageWidget;
/* @var $this yii\web\View */


$this->title = 'My Yii Application';
$blogs = \common\models\Blog::find()->all();
?>
<style>
    .scrolla {
        animation: mymove 2s infinite;
    }
    @keyframes mymove {
        0%   {top: 0px; color: white; font-size: 25px;}
        100% {top: 100px; color: #fff0; font-size: 25px;}
    }
    .line_hegdz{
        line-height: 10px;
    }
</style>

<section id="hero" class="d-flex flex-column justify-content-center align-items-center">
    <div class="hero-container" data-aos="fade-in">
        <h1 style="margin-top: 256px;">Darkuz.ru </h1>
        <marquee><p><?php echo \Yii::t('app', 'Веб-разработчиком Удаленный'); ?></p></marquee>
<!--        <marquee><p> Web Full stack Freelancer</p></marquee>-->
<!--        <p><span class="typed" data-typed-items="Designer, Backend, Full stack, Freelancer"></span></p>-->
         <div class="row">
             <div class="col-sm-8"></div>
             <div class="col-sm-1">
                 <div class="line_hegdz">
                     <span class="glyphicon glyphicon-menu-down scrolla"></span>
                     <span class="glyphicon glyphicon-menu-down scrolla"></span>
                     <span class="glyphicon glyphicon-menu-down scrolla"></span>
                 </div>
             </div>
             <div class="col-sm-3"></div>
         </div>



    </div>
</section>

<main id="main">

    <!-- ======= About Section ======= -->
    <section id="about" class="about">
        <div class="container">

            <div class="section-title">
                <h2><?php echo \Yii::t('app', 'O себе'); ?></h2>
                <p>
                    <?php echo \Yii::t('app', 'себе_uz'); ?>
                    <b style="color: #149ddd"><?php echo \Yii::t('app', 'Yii2, Laravel'); ?></b>
                    <?php echo \Yii::t('app', ' для бэкэнда и'); ?>
                    <b  style="color: #149ddd"><?php echo \Yii::t('app', 'Bootstrap, Javascript, Vuejs'); ?> </b>
                    <?php echo \Yii::t('app', 'для фронтэнда.'); ?>
                </p>
            </div>

            <div class="row">
                <div class="col-lg-4" data-aos="fade-right">
                    <img src="<?=\yii\helpers\Url::to(["../../css/img/about1.jpg"], true)?>" class="img-fluid" style="border-radius: 10px" alt="">
                </div>
                <div class="col-lg-8 pt-4 pt-lg-0 content" data-aos="fade-left">
                    <h3><?php echo \Yii::t('app', 'Frontend/Backend  Bеб-разработчик.'); ?></h3>

                    <div class="row"  style="margin-top: 5%">
                        <div class="col-lg-6">
                            <ul>
                                <li><i class="icofont-rounded-right"></i> <strong><?php echo \Yii::t('app', 'Birthday'); ?>:</strong> <?php echo \Yii::t('app', '10 июнь 1998'); ?></li>
                                <li><i class="icofont-rounded-right"></i> <strong><?php echo \Yii::t('app', 'Website'); ?>:</strong>Darkuz.ru</li>
                                <li><i class="icofont-rounded-right"></i> <strong><?php echo \Yii::t('app', 'Phone'); ?>:</strong> +998 99 800 71 55</li>
                                <li><i class="icofont-rounded-right"></i> <strong><?php echo \Yii::t('app', 'City'); ?>:</strong><?php echo \Yii::t('app', ' City : Ташкент'); ?></li>
                            </ul>
                        </div>
                        <div class="col-lg-6">
                            <ul>
                                <li><i class="icofont-rounded-right"></i> <strong><?php echo \Yii::t('app', 'Age'); ?>:</strong>22</li>
                                <li><i class="icofont-rounded-right"></i> <strong><?php echo \Yii::t('app', 'Degree'); ?>:</strong> full stack</li>
                                <li><i class="icofont-rounded-right"></i> <strong><?php echo \Yii::t('app', 'PhEmailone:'); ?></strong>elmurodovjavogir8@gmail.com</li>
                                <li><i class="icofont-rounded-right"></i> <strong><?php echo \Yii::t('app', 'Freelance:'); ?></strong><?php echo \Yii::t('app', 'Доступный'); ?> </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </section><!-- End About Section -->

    <!-- ======= Facts Section ======= -->
    <section id="facts" class="facts">
        <div class="container">

            <div class="section-title">
                <h2><?php echo \Yii::t('app', 'Факты'); ?></h2>
            </div>

            <div class="row no-gutters">

                <div class="col-lg-4 col-md-6 d-md-flex align-items-md-stretch" data-aos="fade-up">
                    <div class="count-box">
                        <i class="icofont-simple-smile"></i>
                        <span data-toggle="counter-up">10</span>
                        <p><strong>
<!--                                --><?php //echo \Yii::t('app', 'Счастливые'); ?>
                                <br><?php echo \Yii::t('app', 'клиенты'); ?> </strong></p>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 d-md-flex align-items-md-stretch" data-aos="fade-up" data-aos-delay="100">
                    <div class="count-box">
                        <i class="icofont-document-folder"></i>
                        <span data-toggle="counter-up">20</span>
                        <p><?php echo \Yii::t('app', 'Реализация'); ?> <strong> <br><?php echo \Yii::t('app', 'Проектов'); ?> </strong></p>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 d-md-flex align-items-md-stretch" data-aos="fade-up" data-aos-delay="200">
                    <div class="count-box">
                        <i class="icofont-live-support"></i>
                        <span data-toggle="counter-up">24</span>
                        <p><strong><?php echo \Yii::t('app', 'Часы поддержки'); ?></strong> <br><?php echo \Yii::t('app', ' или заказы'); ?></p>
                    </div>
                </div>


            </div>

        </div>
    </section><!-- End Facts Section -->

    <!-- ======= Resume Section ======= -->
    <section id="resume" class="resume">
        <div class="container">

            <div class="section-title">
                <h2><?php echo \Yii::t('app', 'Ресуме'); ?></h2>
                <p></p>
            </div>

            <div class="row">
                <div class="col-lg-6" data-aos="fade-up">
                    <div class="resume-item pb-0">
                        <h4><?php echo \Yii::t('app', 'Контактные данные'); ?> </h4>
                        <ul>
                            <li><?php echo \Yii::t('app', 'Мужчина, 22 года, родился 10 июнь 1998'); ?></li>
                            <li><?php echo \Yii::t('app', 'Call'); ?>: <b style="color: #149ddd">+99899 800 71 55</b></li>
                            <li>Email: <b style="color: #149ddd"> elmurodovjavogir8@gmail.com</b></li>
                            <li>Telegram: <a href="https://telegram.me/@Elmurodov_Javohir"><b style="color: #149ddd"><?php echo \Yii::t('app', 'Elmurodov_Javohir'); ?></b></a></li>

                        </ul>
                    </div>

                    <div class="resume-item">
                        <p><em><?php echo \Yii::t('app', 'место жительства'); ?>:</em></p>
                        <p><?php echo \Yii::t('app', 'Я живу в Ташкенте и Студент 4-курса Ташкентского Университета Информационных Технологий.'); ?></p>
                    </div>

                    <div class="resume-item">
                        <p><em><?php echo \Yii::t('app', 'Знание языков'); ?> </em></p>
                        <p><?php echo \Yii::t('app', 'Русский – разговорный уровень'); ?></p>
                        <p><?php echo \Yii::t('app', 'Узбекский – радной яазик'); ?></p>
                    </div>
                </div>
                <div class="col-lg-6" data-aos="fade-up" data-aos-delay="100">
                    <div class="resume-item">
                        <h4><?php echo \Yii::t('app', 'Frontend, Backend разработчик'); ?></h4>
                        <ul>
                            <li><?php echo \Yii::t('app', 'Я знаю и использую html, css, bootstrap, javascript,'); ?> </li>
                            <li><?php echo \Yii::t('app', 'Jquery, vuejs, Mysql, Yii2, Larave,REST API,  Git'); ?></li>
                            <li><?php echo \Yii::t('app', 'Есть  Опыт работы Git'); ?></li>
                            <li><?php echo \Yii::t('app', 'Есть  Опыт работы REST API'); ?></li>
                            <li><?php echo \Yii::t('app', 'Есть Опыт работы  Laravel'); ?></li>
                            <li><?php echo \Yii::t('app', 'Есть опытом работы от 1 лет.(yii2 framework)'); ?></li>
                            <li><?php echo \Yii::t('app', 'Я работал в Zako МЧЖ в 2018- 2019 году'); ?></li>
                            <li><?php echo \Yii::t('app', 'Я работаю в OST МЧЖ с 2019 года'); ?></li>
                        </ul>
                    </div>
                </div>
            </div>

        </div>
    </section><!-- End Resume Section -->

    <!-- ======= Portfolio Section ======= -->
    <section id="portfolio" class="portfolio section-bg">
        <div class="container">

            <div class="section-title">
                <h2><?php echo \Yii::t('app', 'Портфолио'); ?></h2>
            </div>

            <div class="row portfolio-container" data-aos="fade-up" data-aos-delay="100">

                <div class="col-lg-4 col-md-6 portfolio-item filter-app">
                    <div class="portfolio-wrap" style="border-radius: 10px;">
                        <img src="<?=\yii\helpers\Url::to(["../../css/img/portfol3.png"], true)?>" class="img-fluid" alt="">
                        <div class="portfolio-links">
                            <a href="<?=\yii\helpers\Url::to(["../../css/img/portfol3.png"], true)?>" data-gall="portfolioGallery" class="venobox" title="App 1"><i class="bx bx-plus"></i></a>
                            <a href="https://ombor.articles.uz/" title="More Details"><i class="bx bx-link"></i></a>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 portfolio-item filter-web">
                    <div class="portfolio-wrap" style="border-radius: 10px;">
                        <img src="<?=\yii\helpers\Url::to(["../../css/img/portfol2.png"], true)?>" class="img-fluid" alt="">
                        <div class="portfolio-links">
                            <a href="<?=\yii\helpers\Url::to(["../../css/img/portfol2.png"], true)?>" data-gall="portfolioGallery" class="venobox" title="Web 3"><i class="bx bx-plus"></i></a>
                            <a href="http://online.centertsul.uz/" title="More Details"><i class="bx bx-link"></i></a>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 portfolio-item filter-app">
                    <div class="portfolio-wrap" style="border-radius: 10px;">
                        <img src="<?=\yii\helpers\Url::to(["../../css/img/portfol1.png"], true)?>" class="img-fluid" alt="">
                        <div class="portfolio-links">
                            <a href="<?=\yii\helpers\Url::to(["../../css/img/portfol1.png"], true)?>" data-gall="portfolioGallery" class="venobox" title="App 2"><i class="bx bx-plus"></i></a>
                            <a href="http://ostnews.articles.uz/" title="More Details"><i class="bx bx-link"></i></a>
                        </div>
                    </div>
                </div>

            </div>

        </div>
    </section><!-- End Portfolio Section -->

    <!-- ======= Services Section ======= -->
    <section id="services" class="services">
        <div class="container">

            <div class="section-title">
                <h2><?php echo \Yii::t('app', 'Блог'); ?></h2>
            </div>

            <div class="container">
                <div id="my-table">
                    <ul>
                        <?php foreach ($blogs as $blog): ?>
                        <li class="col-lg-4 col-md-6" style="float: left; list-style-type: none;">
                            <div class="card">
                                <a  onclick="myFunction()" href="<?=\yii\helpers\Url::to(["/blog?id=$blog->id"], true)?>">
                                    <img class="card-img-top" src="<?=\yii\helpers\Url::to(["../../css/img/$blog->image"], true)?>" alt="Card image cap">
                                </a>
                                <div class="card-block">
                                    <a onclick="myFunction()"  href="<?=\yii\helpers\Url::to(["/blog?id=$blog->id"], true)?>">
                                        <?php if(\Yii::$app->language == 'ru'){ ?>
                                        <h4 class="card-title card_title"  style="color: #0a73bb; font-size: 20px"><?php echo $blog->title_ru; ?></h4>
                                        <?php } elseif (\Yii::$app->language == 'uz'){ ?>
                                            <h4 class="card-title card_title"  style="color: #0a73bb; font-size: 20px"><?php echo $blog->title_uz; ?></h4>
                                        <?php } elseif (\Yii::$app->language == 'en'){ ?>
                                                <h4 class="card-title card_title"  style="color: #0a73bb; font-size: 20px"><?php echo $blog->title_en; ?></h4>
                                        <?php }?>
                                    </a>
                                </div>
                                <div class="card-footer">
                                    <small class=""><p class="card-text">
                                        <p><?php echo \Yii::t('app', 'ko\'proq malumot olish uchun rasim ustiga bosing'); ?></p>
                                        <b><span style="color: #0a73bb; font-size: 15px" class="glyphicon glyphicon-calendar" aria-hidden="true"></span><?php echo \Yii::t('app', 'kritlgan vaqti'); ?> :</b> 07.06.2020 <br>
                                        <b><span style="color: #0a73bb; font-size: 15px" class="glyphicon glyphicon-search" aria-hidden="true"></span><?php echo \Yii::t('app', 'Kurishlar soni'); ?> : <b id=blogs"> hozircha 0 ta</b></b>
                                    </small>
                                </div>
                            </div>
                        </li>
                        <?php endforeach; ?>
                    </ul>
                </div>

            </div>
            <div class="col-sm-12 pagination">
                <div class="row">
                    <div class="col-sm-4"></div>
                    <div class="col-sm-1"><ol id="numbers"></ol></div>
                    <div class="col-sm-7"></div>
                </div>


            </div>

        </div>
    </section><!-- End Services Section -->

    <section id="contact">

        <h1 class="section-header"><?php echo \Yii::t('app', 'Контакть'); ?></h1>

        <div class="contact-wrapper">

            <!----------------

            CONTACT PAGE LEFT

            ----------------->

            <form class="form-horizontal" role="form" method="post" action="http://darkuz.ru/index.php/ru">

                <div class="form-group">
                    <div class="col-sm-12">
                        <input type="text" class="form-control" id="name" placeholder="<?php echo \Yii::t('app', 'NAME'); ?>" name="name" value="">
                    </div>
                </div>

                <div class="form-group">
                    <div class="col-sm-12">
                        <input type="email" class="form-control" id="email" placeholder="<?php echo \Yii::t('app', 'EMAIL'); ?>" name="email" value="">
                    </div>
                </div>

                <textarea class="form-control" rows="10" placeholder="MESSAGE" name="<?php echo \Yii::t('app', 'message'); ?>"></textarea>

                <button class="btn btn-primary send-button" id="submit" type="submit" value="SEND">
                    <div class="button">
                       <i class="bx bxl-telegram " style="font-size: 20px"></i><span class="send-text"><?php echo \Yii::t('app', 'SEND'); ?></span>
                    </div>

                </button>

            </form>

            <!----------------

            CONTACT PAGE RIGHT

            ----------------->

            <div class="direct-contact-container">

                <ul class="contact-list">

                    <li class="list-item"><i class="bx bxl-telegram" ></i><span class="contact-text place">@Darkuz.ru</span></i></li>

                    <li class="list-item"><span class="glyphicon glyphicon-earphone"  ></span><span class="contact-text phone"><a href="tel:1-212-555-5555" title="Give me a call">(99) 800 71 55 </a></span></i></li>

                    <li class="list-item"><span class="glyphicon glyphicon-comment"  ></span><span class="contact-text gmail"><a href="mailto:#" title="Send me an email">emailme@gmail.com</a></span></i></li>

                </ul>

                <hr>
                <ul class="social-media-list">
                    <li><a href="https://telegram.me/@Elmurodov_Javohir" target="_blank" class="contact-icon">
                            <div class="call-animation">
                            <i class="bx bxl-telegram"></i>
                            </div>
                        </a>
                    </li>

                    <li><a href="#" target="_blank" class="contact-icon">
                            <div class="call-animation">
                            <i class="bx bxl-facebook"></i>
                            </div>
                        </a>
                    </li>

                    <li><a href="https://www.instagram.com/elmurodovjavogir84/" target="_blank" class="contact-icon">
                            <div class="call-animation">
                                <i class="bx bxl-instagram"></i>
                            </div>

                        </a>
                    </li>

                </ul>
                <hr>

                <div class="copyright">&copy; FREELANCER DARKUZ.RU </div>

            </div>

        </div>

    </section>


</main><!-- End #main -->
<div class="phonering-alo-phone phonering-alo-green phonering-alo-show" id="phonering-alo-phoneIcon">
    <div class="phonering-alo-ph-circle"></div>
    <div class="phonering-alo-ph-circle-fill"></div>
    <a href="tel:+84123456789" class="pps-btn-img" title="Liên hệ">
        <div class="phonering-alo-ph-img-circle"></div>
    </a>
</div>


