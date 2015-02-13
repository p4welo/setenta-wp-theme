<?php
/*
Template Name: New INDEX
*/
?>
<!doctype html>
<html>
<head>
    <meta charset="UTF-8"/>
    <title>Szkoła tańca Setenta</title>

    <link href="<?php bloginfo('template_url'); ?>/new/vendor/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet"
          media="screen"/>
    <link href="<?php bloginfo('template_url'); ?>/new/vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet"
          media="screen"/>
    <link href="<?php bloginfo('template_url'); ?>/new/vendor/skippr/css/jquery.skippr.css" rel="stylesheet"
          media="screen"/>
    <link href="<?php bloginfo('template_url'); ?>/new/vendor/animate.css/animate.min.css" rel="stylesheet"
          media="screen"/>
    <link href="<?php bloginfo('template_url'); ?>/new/assets/css/style.css" rel="stylesheet" media="screen"/>
</head>
<body>
<nav class="navbar navbar-default">
    <div class="container">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-collapse">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="#">
                <img alt="Brand" src="<?php bloginfo('template_url'); ?>/new/assets/img/sys/logo.png">
            </a>
        </div>

        <div class="collapse navbar-collapse" id="navbar-collapse">
            <ul class="nav navbar-nav navbar-right">
                <li class="active">
                    <a href="#">Aktualności</a>
                </li>
                <li>
                    <a href="#">Zapisy</a>
                </li>
                <li>
                    <a href="#">Grafik</a>
                </li>
                <li>
                    <a href="#">Rodzaje tańca</a>
                </li>
                <li>
                    <a href="#">Instruktorzy</a>
                </li>
                <li>
                    <a href="#">Cennik</a>
                </li>
                <li>
                    <a href="#">Wynajem</a>
                </li>
                <li>
                    <a href="#">Formacja</a>
                </li>
                <li>
                    <a href="#">Kontakt</a>
                </li>
            </ul>
        </div>
    </div>
</nav>
<div class="news-page" ng:app="newsWidget">
    <div id="slider-container" class="slider-container">
        <div u="loading" class="slider-loading">
            <div class="slider-back">
            </div>
            <div class="slider-indicator text-center">
                <i class="fa fa-spin fa-spinner"></i>
            </div>
        </div>
        <div u="slides" class="slider-slides">
            <div>
                <img u="image" src="<?php bloginfo('template_url'); ?>/new/assets/img/carousel/3.jpg"/>
            </div>
            <div>
                <img u="image" src="<?php bloginfo('template_url'); ?>/new/assets/img/carousel/1.jpg"/>
            </div>
            <div>
                <img u="image" src="<?php bloginfo('template_url'); ?>/new/assets/img/carousel/2.jpg"/>
            </div>
        </div>
        <div u="navigator" class="jssorb21">
            <div u="prototype" class="slider-prototype"></div>
        </div>
        <span u="arrowleft" class="jssora21l"></span>
        <span u="arrowright" class="jssora21r"></span>
    </div>
    <div class="registration-row row" ng:controller="registrationCtrl">
        <div class="container">
            <h2 class="col-sm-12">ZAPISY DO NOWYCH GRUP</h2>

            <div class="registration-grid text-center row">
                <div ng:if="courseLoading" class="text-center">
                    <i class="fa fa-spin fa-spinner"></i>
                    Ładowanie...
                </div>

                <figure class="col-md-3 col-lg-2 col-sm-4" ng:repeat="group in courseGroups">
                    <img
                        ng:src="<?php bloginfo('template_url'); ?>/new/assets/img/styles/{{resolveStyleImage(group[0].style)}}"
                        alt="img21">
                    <figcaption>
                        <div>
                            <h3 ng:bind="group[0].style.name"></h3>

                            <p ng:repeat:start="course in group">
                                {{course.day | translate}}
                                {{ course.startTime}}
                            </p>
                            <br ng:repeat:end/>
                        </div>
                    </figcaption>
                </figure>
            </div>
        </div>
    </div>
    <div class="news-content row">
        <div class="container">
            <div class="col-sm-8">
                <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
                    <div class="col-sm-12 panel panel-default post-panel">
                        <?php the_post_thumbnail('full', array('class' => 'thumbnail col-sm-12 col-xs-12')); ?>
                        <div class="col-sm-12">
                            <h2>
                                <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                            </h2>

                            <p>
                                <?php
                                the_content('Czytaj dalej &rarr;');
                                ?>
                            </p>
                        </div>
                    </div>
                <?php endwhile;
                else: ?>
                    <p><?php _e('Nie znaleziono postów spełniających podane kryteria.'); ?></p>
                <?php endif; ?>
            </div>
        </div>
    </div>

    <div class="instructor-row row">
        <div class="container">
            <h2 class="col-sm-12">INSTRUKTORZY TAŃCA</h2>

            <div class="row">
                <div class="col-sm-12">
                    <img src="<?php bloginfo('template_url'); ?>/new/assets/img/instructors/barbara-radomska.jpg"
                         alt="barbara radomska karpińska"
                         class="img-circle col-sm-3 col-xs-6"/>
                    <img src="<?php bloginfo('template_url'); ?>/new/assets/img/instructors/pawel-radomski.jpg"
                         alt="paweł radomski" class="img-circle col-sm-3 col-xs-6"/>
                    <img src="<?php bloginfo('template_url'); ?>/new/assets/img/instructors/magda-mroz.jpg"
                         alt="magda mróz"
                         class="img-circle col-sm-3 col-xs-6"/>
                    <img src="<?php bloginfo('template_url'); ?>/new/assets/img/instructors/kasia-michalak.jpg"
                         alt="kasia michalak" class="img-circle col-sm-3 col-xs-6"/>
                </div>
                <!--            <img src="-->
                <?php //bloginfo('template_url'); ?><!--/new/assets/img/instructors/marta-wegrzynowska.jpg"-->
                <!--                 alt="marta węgrzynowska"-->
                <!--                 class="img-circle col-sm-2"/>-->
                <!--            <img src="-->
                <?php //bloginfo('template_url'); ?><!--/new/assets/img/instructors/martyna-olszewska.jpg"-->
                <!--                 alt="martyna olszewska"-->
                <!--                 class="img-circle col-sm-2"/>-->
            </div>
        </div>
    </div>
</div>
</div>
<footer>
    <div class="row first-line">
        dupa
    </div>
    <div class="row second-line text-center">
        &copy;
        <a href="http://setenta.wroclaw.pl">
            Szkoła tańca Wrocław
        </a>
        <span id="year-copy"></span>
        - Designed & Developed by
        <a href="mailto:p4welo@gmail.com">Paweł</a>
    </div>
</footer>
<script src="<?php bloginfo('template_url'); ?>/new/vendor/lodash/lodash.min.js" type="text/javascript"></script>
<script src="<?php bloginfo('template_url'); ?>/new/dist/setenta-wordpress.min.js" type="text/javascript"></script>
</body>
</html>