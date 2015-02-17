<?php
/*
Template Name: NEW  Cennik
*/
?>

<?php get_header(); ?>
    <div class="registration-row row" ng:app="setenta" ng-cloak>
        <div class="container" ng:controller="registrationCtrl">
            <h2 class="col-sm-12">ZAPISY DO NOWYCH GRUP</h2>

            <div class="registration-grid text-center row">
                <div ng:if="courseLoading" class="text-center">
                    <i class="fa fa-spin fa-spinner"></i>
                    Ładowanie...
                </div>

                <figure class="col-md-3 col-lg-2 col-sm-4" ng:repeat="group in courseGroups" ng:if="!courseLoading">
                    <img
                        ng:src="<?php bloginfo('template_url'); ?>/assets/img/styles/{{resolveStyleImage(group[0].style)}}"
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
    <div class="pricelist-page row">
        <div class="container">
            <div class="col-sm-8 col-xs-12">
                <div class="alert alert-danger">Niewykorzystaną lekcję można odrobić w ciągu <u>dwóch tygodni</u>
                    podczas
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
            <div class="col-sm-4 search-container">
                <h3 class="col-sm-12">Honorujemy</h3>

                <div class="col-sm-12">
                    <a class="oksystem" target="_blank" href="http://www.oksystem.pl">
                        <img src="<?php bloginfo('template_url'); ?>/assets/img/sys/oksystem.png"/>
                    </a>
                </div>
                <div class="col-sm-12">
                    <a class="foryoucard" target="_blank" href="https://www.4youcard.pl/">
                        <img src="<?php bloginfo('template_url'); ?>/assets/img/sys/4ucard.png"/>
                    </a>
                </div>
                <div class="fb-like-box col-sm-12" data-href="https://www.facebook.com/setenta.taniec" data-width="100%" data-colorscheme="light" data-show-faces="true" data-header="false" data-stream="true" data-show-border="false"></div>
            </div>
        </div>
        <div class="instructor-row row">
            <div class="container">
                <h2>INSTRUKTORZY</h2>
            </div>
        </div>
        <div class="instructor-row row">
            <div class="container">
                <div class="owl-carousel">
                    <div class="item">
                        <img src="
                    <?php bloginfo('template_url'); ?>/assets/img/instructors/barbara-radomska.jpg"
                             alt="barbara radomska karpińska"/>
                    </div>
                    <div class="item">
                        <img src="
                    <?php bloginfo('template_url'); ?>/assets/img/instructors/pawel-radomski.jpg"
                             alt="paweł radomski"/>
                    </div>
                    <div class="item">
                        <img src="
                    <?php bloginfo('template_url'); ?>/assets/img/instructors/magda-mroz.jpg"
                             alt="magda mróz"/>
                    </div>
                    <div class="item">
                        <img src="
                    <?php bloginfo('template_url'); ?>/assets/img/instructors/kasia-michalak.jpg"
                             alt="kasia michalak"/>
                    </div>
                    <div class="item">
                        <img src="
                    <?php bloginfo('template_url'); ?>/assets/img/instructors/julia-utig.jpg"
                             alt="julia utig"/>
                    </div>
                    <div class="item">
                        <img src="
                    <?php bloginfo('template_url'); ?>/assets/img/instructors/marta-wegrzynowska.jpg"
                             alt="marta węgrzynowska"/>
                    </div>
                    <a class="item" href="/marta-mostek-moscicka">
                        <img src="<?php bloginfo('template_url'); ?>/assets/img/instructors/marta-moscicka.jpg" title="marta mostek mościcka" alt="marta mostek mościcka"/>
                    </a>
                    <div class="item">
                        <img src="
                    <?php bloginfo('template_url'); ?>/assets/img/instructors/martyna-olszewska.jpg"
                             alt="martyna olszewska"/>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php get_footer(); ?>