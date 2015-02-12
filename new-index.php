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
    {{courses}}
    <div class="container">
        <h2 class="col-sm-12">ZAPISY DO NOWYCH GRUP</h2>

        <div class="registration-grid text-center row">
            <div ng:if="courseLoading" class="text-center">
                <i class="fa fa-spin fa-spinner"></i>
                Ładowanie...
            </div>
            <figure class="col-sm-2">
                <img src="<?php bloginfo('template_url'); ?>/new/assets/img/styles/bachata.png" alt="img21">
                <figcaption>
                    <div>
                        <h3>Salsa</h3>

                        <p class="btn btn-xs btn-default">Wtorek 12:00</p>
                        <br/>

                        <p>Środa 13:00</p>
                    </div>
                </figcaption>
            </figure>
            <figure class="col-sm-2">
                <img src="<?php bloginfo('template_url'); ?>/new/assets/img/styles/ballroom.png" alt="img21">
                <figcaption>
                    <div>
                        <h3>Taniec towarzyski</h3>

                        <p>Wtorek 12:00</p>
                        <br/>

                        <p>Środa 13:00</p>
                    </div>
                </figcaption>
            </figure>
            <figure class="col-sm-2">
                <img src="<?php bloginfo('template_url'); ?>/new/assets/img/styles/kids.png" alt="img21">
                <figcaption>
                    <div>
                        <h3>Balet 3-latki</h3>

                        <p>Wtorek 12:00</p>
                        <br/>

                        <p>Środa 13:00</p>
                    </div>
                </figcaption>
            </figure>
            <figure class="col-sm-2">
                <img src="<?php bloginfo('template_url'); ?>/new/assets/img/styles/first-dance.png" alt="img21">
                <figcaption>
                    <div>
                        <h3>Pierwszy taniec</h3>

                        <p>Wtorek 12:00</p>
                        <br/>

                        <p>Środa 13:00</p>
                    </div>
                </figcaption>
            </figure>
            <figure class="col-sm-2">
                <img src="<?php bloginfo('template_url'); ?>/new/assets/img/styles/ladies-latino.png" alt="img21">
                <figcaption>
                    <div>
                        <h3>Latino solo</h3>

                        <p>Wtorek 12:00</p>
                        <br/>

                        <p>Środa 13:00</p>
                    </div>
                </figcaption>
            </figure>
        </div>
    </div>
</div>
<div class="news-content row">
    <div class="container" ng:controller="newsCtrl">
        <div class="col-sm-8">
            <div ng:if="newsLoading" class="text-center">
                <i class="fa fa-spin fa-spinner"></i>
                Ładowanie...
            </div>
            <div class="col-sm-12 panel panel-default post-panel animated fadeIn"
                 ng:repeat="post in posts | filter: searchText | limitTo: 10">
                <img class="thumbnail col-sm-12 col-xs-12" ng:src="{{post.featured_image.source}}"/>

                <div class="col-sm-12">
                    <small class="date-area">
                        <i class="fa fa-calendar-o text-danger"></i>
                        {{ post.date | date:'dd-MM-yyyy' }}
                    </small>
                    <small class="author-area">
                        <i class="fa fa-user text-danger"></i>
                        {{post.author.first_name | uppercase}}
                    </small>
                    <small class="category-area">
                        <i class="fa fa-folder-open-o text-danger"></i>
                        <span ng:repeat="cat in post.terms.category">{{cat.name | uppercase}}</span>
                    </small>

                    <h2>
                        <a ng:href="{{post.link}}" href="javascript:void(0)" ng:bind:html="post.title"></a>
                    </h2>

                    <p ng:bind:html="post.content"></p>

                    <div class="text-right more-button-container">
                        <a ng:href="{{post.link}}" href="javascript:void(0)" class="btn btn-default">WIĘCEJ...</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-sm-4">
            <div class="form-group has-feedback search-container">
                <input type="text" class="form-control" placeholder="Szukaj..."
                       aria-describedby="inputSuccess2Status" ng:model="searchText">
                <span class="glyphicon glyphicon-search form-control-feedback" aria-hidden="true"></span>
            </div>
            <h3>Kategorie</h3>

            <div class="list-group">
                <a href="#" class="list-group-item">Dapibus ac facilisis in</a>
                <a href="#" class="list-group-item">Morbi leo risus</a>
                <a href="#" class="list-group-item">Porta ac consectetur ac</a>
                <a href="#" class="list-group-item">Vestibulum at eros</a>
            </div>

            <h3>Honorujemy</h3>

        </div>
    </div>

    <noscript>
        <div class="container">

            <div class="col-sm-8">
                <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
                    <div class="col-sm-12 panel panel-default post-panel">
                        <?php the_post_thumbnail('full', array('class' => 'thumbnail col-sm-12 col-xs-12')); ?>

                        <div class="col-sm-12">
                            <small class="date-area">
                                <i class="fa fa-calendar-o text-danger"></i>
                                21 cze 2015
                            </small>
                            <small class="category-area">
                                <i class="fa fa-folder-open-o text-danger"></i>
                                NOWE GRUPY
                            </small>

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
    </noscript>
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
                <img src="<?php bloginfo('template_url'); ?>/new/assets/img/instructors/magda-mroz.jpg" alt="magda mróz"
                     class="img-circle col-sm-3 col-xs-6"/>
                <img src="<?php bloginfo('template_url'); ?>/new/assets/img/instructors/kasia-michalak.jpg"
                     alt="kasia michalak" class="img-circle col-sm-3 col-xs-6"/>
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
<script src="<?php bloginfo('template_url'); ?>/new/vendor/jquery/dist/jquery.min.js" type="text/javascript"></script>
<script src="<?php bloginfo('template_url'); ?>/new/vendor/bootstrap/dist/js/bootstrap.min.js"
        type="text/javascript"></script>

<script src="<?php bloginfo('template_url'); ?>/new/vendor/skippr/js/jquery.skippr.min.js"
        type="text/javascript"></script>
<script src="<?php bloginfo('template_url'); ?>/new/vendor/jssor/js/jssor.js" type="text/javascript"></script>
<script src="<?php bloginfo('template_url'); ?>/new/vendor/jssor/js/jssor.slider.js" type="text/javascript"></script>
<script src="<?php bloginfo('template_url'); ?>/new/vendor/angularjs/angular.min.js" type="text/javascript"></script>
<script src="<?php bloginfo('template_url'); ?>/new/vendor/angular-sanitize/angular-sanitize.min.js"
        type="text/javascript"></script>
<script src="<?php bloginfo('template_url'); ?>/new/vendor/angular-resource/angular-resource.min.js"
        type="text/javascript"></script>
<script src="<?php bloginfo('template_url'); ?>/new/assets/js/app.js" type="text/javascript"></script>
<script src="<?php bloginfo('template_url'); ?>/new/assets/js/news.js" type="text/javascript"></script>
</body>
</html>