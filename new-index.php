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
    <link href="<?php bloginfo('template_url'); ?>/new/vendor/fullcalendar/dist/fullcalendar.min.css" rel="stylesheet"
          media="screen"/>
    <link href="<?php bloginfo('template_url'); ?>/new/vendor/owl.carousel/dist/assets/owl.carousel.min.css" rel="stylesheet" media="screen"/>
    <link href="<?php bloginfo('template_url'); ?>/new/vendor/owl.carousel/dist/assets/owl.theme.default.min.css" rel="stylesheet" media="screen"/>
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
<div class="news-page" ng:app="setenta">
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
<div ng:controller="newsCtrl">
    <div class="news-content row">
        <div class="container">
            <div class="col-sm-8">
                <div ng:if="newsLoading" class="text-center">
                    <i class="fa fa-spin fa-spinner"></i>
                    Ładowanie...
                </div>
                <div class="col-sm-12 panel panel-default post-panel animated fadeIn"
                     ng:repeat="post in posts | filter: {'title': searchText} | limitTo: postLimit">
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
                        <small class="category-area" ng-if="post.terms.post_tag.length>0">
                            <i class="fa fa-tag text-danger"></i>
                            <span ng:repeat="tag in post.terms.post_tag">{{tag.name | uppercase}}</span>
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
                <div class="col-sm-12 panel panel-default post-panel text-center" ng:if="postLimit < posts.length">
                    <a href="javascript:void(0)" class="list-group-item active" ng:click="loadMore()">
                        <i class="fa fa-cog fa-spin"></i>
                        Załaduj więcej postów...
                    </a>
                </div>
            </div>
            <div class="col-sm-4 search-container">
                <div class="form-group has-feedback">
                    <input type="text" class="form-control" placeholder="Szukaj..."
                           aria-describedby="inputSuccess2Status" ng:model="searchText">
                    <span class="glyphicon glyphicon-search form-control-feedback" aria-hidden="true"></span>
                </div>
                <h3>Kategorie</h3>

                <div class="list-group">
                    <a href="javascript:void(0)" class="list-group-item" ng:repeat="tag in tags" ng:bind="tag.name"
                       ng:click="toggleTag(tag)"
                       ng:class="{'active': selectedTag == tag}"></a>
                </div>

                <h3>Honorujemy</h3>

                <div class="col-sm-12">
                    <a class="oksystem" target="_blank" href="http://www.oksystem.pl">
                        <img src="<?php bloginfo('template_url'); ?>/new/assets/img/sys/oksystem.png"/>
                    </a>
                </div>
                <div class="col-sm-12">
                    <a class="foryoucard" target="_blank" href="https://www.4youcard.pl/">
                        <img src="<?php bloginfo('template_url'); ?>/new/assets/img/sys/4ucard.png"/>
                    </a>
                </div>
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

            <div class="owl-carousel">
                <div class="item">
                    <img src="<?php bloginfo('template_url'); ?>/new/assets/img/instructors/barbara-radomska.jpg"
                         alt="barbara radomska karpińska"/>
                </div>
                <div class="item">
                    <img src="<?php bloginfo('template_url'); ?>/new/assets/img/instructors/pawel-radomski.jpg"
                         alt="paweł radomski"/>
                </div>
                <div class="item">
                    <img src="<?php bloginfo('template_url'); ?>/new/assets/img/instructors/magda-mroz.jpg"
                         alt="magda mróz"/>
                </div>
                <div class="item">
                    <img src="<?php bloginfo('template_url'); ?>/new/assets/img/instructors/kasia-michalak.jpg"
                         alt="kasia michalak"/>
                </div>
                <div class="item">
                    <img src="<?php bloginfo('template_url'); ?>/new/assets/img/instructors/julia-utig.jpg"
                         alt="julia utig"/>
                </div>
                <div class="item">
                    <img src="<?php bloginfo('template_url'); ?>/new/assets/img/instructors/marta-wegrzynowska.jpg"
                         alt="marta węgrzynowska"/>
                </div>
                <div class="item">
                    <img src="<?php bloginfo('template_url'); ?>/new/assets/img/instructors/marta-moscicka.jpg"
                         alt="marta mostek mościcka"/>
                </div>
                <div class="item">
                    <img src="<?php bloginfo('template_url'); ?>/new/assets/img/instructors/martyna-olszewska.jpg"
                         alt="martyna olszewska"/>
                </div>

            </div>
            <!--            <div class="row">-->
            <!--                <div class="col-sm-12">-->
            <!--                    <img src="-->
            <?php //bloginfo('template_url'); ?><!--/new/assets/img/instructors/barbara-radomska.jpg" alt="barbara radomska karpińska" class="col-sm-3 col-xs-6"/>-->
            <!--                    <img src="-->
            <?php //bloginfo('template_url'); ?><!--/new/assets/img/instructors/pawel-radomski.jpg" alt="paweł radomski" class="col-sm-3 col-xs-6"/>-->
            <!--                    <img src="-->
            <?php //bloginfo('template_url'); ?><!--/new/assets/img/instructors/magda-mroz.jpg" alt="magda mróz" class="col-sm-3 col-xs-6"/>-->
            <!--                    <img src="-->
            <?php //bloginfo('template_url'); ?><!--/new/assets/img/instructors/kasia-michalak.jpg" alt="kasia michalak" class="col-sm-3 col-xs-6"/>-->
            <!--                </div>-->
            <!--            </div>-->
        </div>
    </div>
</div>
<div class="instrucors-page row">
    <div class="container">
        <div class="col-xs-6 col-lg-3">
            <div class="team-member">
                <a class="grayHover" href="javascript:void(0)">
                    <img src="<?php bloginfo('template_url'); ?>/assets/img/photos/bk.jpg" class="col-xs-12 img-circle"
                         alt="BARBARA KARPIŃSKA" title="BARBARA KARPIŃSKA">
                </a>
                <h4>BARBARA RADOMSKA (KARPIŃSKA)</h4>

                <div>
                    <h6>Taniec towarzyski, Salsa, Bachata, Taniec użytkowy, Pierwszy taniec, Balet
                        dla dzieci, Formacje dziecięce</h6>
                </div>
            </div>
        </div>
        <div class="col-xs-6 col-lg-3">
            <div class="team-member">
                <a class="grayHover" href="javascript:void(0)">
                    <img src="<?php bloginfo('template_url'); ?>/assets/img/photos/pr2.jpg" class="col-xs-12 img-circle"
                         alt="PAWEŁ RADOMSKI" title="PAWEŁ RADOMSKI">
                </a>
                <h4>PAWEŁ RADOMSKI</h4>

                <div>
                    <h6>Salsa kubańska, Bachata</h6>
                </div>
            </div>
        </div>
        <div class="col-xs-6 col-lg-3">
            <div class="team-member">
                <a class="grayHover" href="javascript:void(0)">
                    <img src="<?php bloginfo('template_url'); ?>/assets/img/photos/mm2.jpg" class="col-xs-12 img-circle"
                         alt="MAGDA MRÓZ" title="MAGDA MRÓZ">
                </a>
                <h4>MAGDA MRÓZ</h4>

                <div>
                    <h6>Balet dla dzieci, Mix dance, Zouk</h6>
                </div>
            </div>
        </div>
        <div class="col-xs-6 col-lg-3">
            <div class="team-member">
                <a class="grayHover" href="javascript:void(0)">
                    <img src="<?php bloginfo('template_url'); ?>/assets/img/photos/mostek.jpg"
                         class="col-xs-12 img-circle" alt="MARTA 'MOSTEK' MOŚCICKA" title="MARTA 'MOSTEK' MOŚCICKA">
                </a>
                <h4>MARTA "MOSTEK" MOŚCICKA</h4>

                <div>
                    <h6>Hip hop</h6>
                </div>

            </div>
        </div>
        <div class="col-xs-6 col-lg-3">
            <div class="team-member">
                <a class="grayHover" href="javascript:void(0)">
                    <img src="<?php bloginfo('template_url'); ?>/assets/img/photos/julia2.jpg"
                         class="col-xs-12 img-circle"
                         alt="JULIA UTIG" title="JULIA UTIG">
                </a>
                <h4>JULIA UTIG</h4>

                <div>
                    <h6>Zouk</h6>
                </div>
            </div>
        </div>
        <div class="col-xs-6 col-lg-3">
            <div class="team-member">
                <a class="grayHover" href="javascript:void(0)">
                    <img src="<?php bloginfo('template_url'); ?>/assets/img/photos/kasia.jpg"
                         class="col-xs-12 img-circle"
                         alt="KATARZYNA MICHALAK" title="KATARZYNA MICHALAK">
                </a>
                <h4>KATARZYNA MICHALAK</h4>

                <div>
                    <h6>Taniec towarzyski, Taniec użytkowy, Taniec towarzyski dla dzieci</h6>
                </div>
            </div>
        </div>
        <div class="col-xs-6 col-lg-3">
            <div class="team-member">
                <a class="grayHover" href="javascript:void(0)">
                    <img src="<?php bloginfo('template_url'); ?>/assets/img/photos/martaw.jpg"
                         class="col-xs-12 img-circle"
                         alt="MARTA WĘGRZYNOWSKA" title="MARTA WĘGRZYNOWSKA">
                </a>
                <h4>MARTA WĘGRZYNOWSKA</h4>

                <div>
                    <h6>Taniec towarzyski, Taniec użytkowy, Balet dla dzieci, Mix dance</h6>
                </div>
            </div>
        </div>
        <div class="col-xs-6 col-lg-3">
            <div class="team-member">
                <a class="grayHover" href="javascript:void(0)">
                    <img src="<?php bloginfo('template_url'); ?>/assets/img/photos/martyna.jpg"
                         class="col-xs-12 img-circle"
                         alt="MARTYNA OLSZEWSKA" title="MARTYNA OLSZEWSKA">
                </a>
                <h4>MARTYNA OLSZEWSKA</h4>

                <div>
                    <h6>Balet dla dzieci, Balet z elementami gimnastyki artystycznej</h6>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="schedule-page">
    <div ng:init="initCalendar()" ng:controller="scheduleCtrl">
        <div class="container">

            <div class="visible-md-block visible-lg-block">
                <div class="panel panel-default">
                    <div class="panel-body">
                        <h2>Duża sala</h2>

                        <div class="row text-center" ng:if="loadingView">
                            <i class="fa fa-spin fa-spinner"></i>
                            <span>Ładowanie...</span>
                        </div>
                        <div id='bigSchedule'></div>
                    </div>
                </div>
                <div class="panel panel-default">
                    <div class="panel-body">
                        <h2>Mała sala</h2>

                        <div class="row text-center" ng:if="loadingView">
                            <i class="fa fa-spin fa-spinner"></i>
                            <span>Ładowanie...</span>
                        </div>
                        <div id='smallSchedule'></div>
                    </div>
                </div>
            </div>
            <div class="panel panel-default visible-sm-block visible-xs-block">
                <div class="panel-body">
                    <div ng-repeat="d in days">
                        <legend>
                            {{ d | translate }}
                        </legend>
                        <table class="table table-condensed">
                            <thead>
                            <tr>
                                <th>godz</th>
                                <th>nazwa</th>
                                <th>poziom</th>
                                <th>sala</th>
                                <th>&nbsp;</th>
                            </tr>
                            </thead>
                            <tbody>

                            <tr ng-repeat="c in courseList | filter : {'day': d}">
                                <td>
                                    <span ng-bind="c.startTime"></span>
                                    -
                                    <span ng-bind="c.endTime"></span>
                                </td>
                                <td ng-bind="c.style.name"></td>
                                <td>
                                    {{ c.level | translate }}
                                </td>
                                <td ng-bind="c.room.name"></td>
                                <td class="text-right">
                                    <span class="badge badge-danger" ng-if="c.canRegister">ZAPISY</span>
                                    <span class='badge badge-error'
                                          ng-if="!c.canRegister && !c.canJoin">BRAK MIEJSC</span>
                                </td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="pricelist-page row">
    <div class="container">
        <div class="col-sm-8 col-xs-12 col-sm-offset-2">
            <div class="alert alert-danger">Niewykorzystaną lekcję można odrobić w ciągu <u>dwóch tygodni</u> podczas
                zajęć w dowolnej technice.
            </div>
            <div class="panel panel-default">
                <div class="panel-body">
                    <legend>Dorośli</legend>
                    <dl class="dl-horizontal">
                        <dt>20 zł</dt>
                        <dd>Pojedyncze wejście (1h)</dd>
                    </dl>
                    <dl class="dl-horizontal emphasize">
                        <dt>70 zł</dt>
                        <dd>Karnet <strong>miesięczny</strong> STANDARD na 4 zajęcia (4 x 1h)</dd>
                    </dl>
                    <dl class="dl-horizontal">
                        <dt>110 zł</dt>
                        <dd>Karnet <strong>miesięczny</strong> na 8 zajęć (8 x 1h)</dd>
                    </dl>
                    <dl class="dl-horizontal">
                        <dt>180 zł</dt>
                        <dd>Karnet <strong>miesięczny</strong> OPEN na wszystkie zajęcia</dd>
                    </dl>
                </div>
            </div>

            <div class="panel panel-default">
                <div class="panel-body">
                    <legend>Dzieci</legend>
                    <dl class="dl-horizontal">
                        <dt>18 zł</dt>
                        <dd>Pojedyncze wejście (45min)</dd>
                    </dl>
                    <dl class="dl-horizontal">
                        <dt>65 zł</dt>
                        <dd>Karnet <strong>miesięczny</strong> na 4 zajęcia (4 x 45min)</dd>
                    </dl>
                    <dl class="dl-horizontal">
                        <dt>100 zł</dt>
                        <dd>Karnet <strong>miesięczny</strong> na 8 zajęć (8 x 1h) - formacja taneczna</dd>
                    </dl>
                    <dl class="dl-horizontal">
                        <dt>110 zł</dt>
                        <dd>Karnet <strong>miesięczny</strong> na 8 zajęć (8 x 45min)</dd>
                    </dl>
                    <dl class="dl-horizontal emphasize">
                        <dt>150 zł</dt>
                        <dd>Karnet <strong>miesięczny</strong> OPEN na wszystkie zajęcia <u>oprócz formacji
                                tanecznej</u></dd>
                    </dl>
                </div>
            </div>

            <div class="panel panel-default">
                <div class="panel-body">
                    <legend>Studenci (za okazaniem legitymacji)</legend>
                    <dl class="dl-horizontal">
                        <dt>18 zł</dt>
                        <dd>Pojedyncze wejście (1h)</dd>
                    </dl>
                    <dl class="dl-horizontal">
                        <dt>65 zł</dt>
                        <dd>Karnet <strong>miesięczny</strong> na 4 zajęcia (4 x 1h)</dd>
                    </dl>
                </div>
            </div>

            <div class="panel panel-default">
                <div class="panel-body">
                    <legend>Seniorzy (zajęcia dedykowane)</legend>
                    <dl class="dl-horizontal">
                        <dt>12 zł</dt>
                        <dd>Pojedyncze wejście (1h)</dd>
                    </dl>
                    <dl class="dl-horizontal">
                        <dt>40 zł</dt>
                        <dd>Karnet <strong>miesięczny</strong> na 4 zajęcia (4 x 1h)</dd>
                    </dl>
                </div>
            </div>

            <div class="panel panel-default">
                <div class="panel-body">
                    <legend>Zajęcia indywidualne</legend>
                    <dl class="dl-horizontal">
                        <dt>70 zł</dt>
                        <dd>Lekcja indywidualna (1h)</dd>
                    </dl>
                    <dl class="dl-horizontal">
                        <dt>250 zł</dt>
                        <dd>Pierwszy taniec - karnet na 4 wejścia (4 x 1h) do wykorzystania w dowolnym okresie</dd>
                    </dl>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
<footer>
    <!--    <div class="row first-line">-->
    <!--    </div>-->
    <div class="row second-line text-center">
        &copy;
        <a href="http://setenta.wroclaw.pl">
            Szkoła tańca Wrocław
        </a>
        <span id="year-copy"></span>
        <!--        - Designed & Developed by-->
        <!--        <a href="mailto:p4welo@gmail.com">Paweł</a>-->
    </div>
</footer>
<!--<script src="--><?php //bloginfo('template_url'); ?><!--/new/vendor/jquery/dist/jquery.min.js" type="text/javascript"></script>-->
<!--<script src="--><?php //bloginfo('template_url'); ?><!--/new/vendor/bootstrap/dist/js/bootstrap.min.js"-->
<!--        type="text/javascript"></script>-->
<!--<script src="--><?php //bloginfo('template_url'); ?><!--/new/vendor/jssor/js/jssor.js" type="text/javascript"></script>-->
<!--<script src="--><?php //bloginfo('template_url'); ?><!--/new/vendor/jssor/js/jssor.slider.js" type="text/javascript"></script>-->
<!--<script src="--><?php //bloginfo('template_url'); ?><!--/new/vendor/angularjs/angular.js" type="text/javascript"></script>-->
<!--<script src="--><?php //bloginfo('template_url'); ?><!--/new/vendor/angular-sanitize/angular-sanitize.min.js"-->
<!--        type="text/javascript"></script>-->
<!--<script src="--><?php //bloginfo('template_url'); ?><!--/new/vendor/angular-resource/angular-resource.min.js"-->
<!--        type="text/javascript"></script>-->
<!--<script src="--><?php //bloginfo('template_url'); ?><!--/new/vendor/angular-translate/angular-translate.min.js"-->
<!--        type="text/javascript"></script>-->
<!--<script src="--><?php //bloginfo('template_url'); ?><!--/new/vendor/lodash/lodash.min.js" type="text/javascript"></script>-->
<!--<script src="--><?php //bloginfo('template_url'); ?><!--/new/vendor/moment/min/moment-with-locales.min.js"-->
<!--        type="text/javascript"></script>-->
<!--<script src="--><?php //bloginfo('template_url'); ?><!--/new/vendor/fullcalendar/dist/fullcalendar.min.js"-->
<!--        type="text/javascript"></script>-->
<!--<script src="--><?php //bloginfo('template_url'); ?><!--/new/vendor/owl.carousel/dist/owl.carousel.min.js"-->
<!--        type="text/javascript"></script>-->
<script src="<?php bloginfo('template_url'); ?>/new/dist/setenta-wordpress.min.js" type="text/javascript"></script>
<!--<script src = "--><?php //bloginfo('template_url'); ?><!--/new/assets/js/app.js" type = "text/javascript" ></script>-->
<!--<script src="--><?php //bloginfo('template_url'); ?><!--/new/assets/js/news.js" type="text/javascript"></script>-->
<!--<script src="--><?php //bloginfo('template_url'); ?><!--/new/assets/js/schedule.js" type="text/javascript"></script>-->
</body>
</html>