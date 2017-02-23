<?php
/*
Template Name: Partner do tanca
*/
?>
<?php get_header(); ?>
    <div class="news-page">
    <div class="news-content single-page row">
        <div class="container">
            <div class="col-sm-8">
                <div class="col-sm-12 panel panel-default post-panel">
                    <img src="" alt="" class="thumbnail col-xs-12">

                    <div class="col-sm-12" ng-app="test">
                        <h2>
                            <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                        </h2>

                        <p>Szukasz partnera/partnerki do tańca? Pomożemy Ci go znaleźć!</p>
                        <p>Pozostaw nam swoje dane - skontaktujemy się jak tylko kogoś Ci dobierzemy :)</p>
                        <strong>Pozostawione dane kontaktowe nie zostaną udostępnione stronom trzecim.</strong>

                        <div class="panel panel-default" ng-cloak>
                            <div class="panel-body" ng-if="step==0">
                                <legend>Krok 1: Podstawowe dane</legend>
                                <form class="form-horizontal">
                                    <div class="form-group">
                                        <label for="firstName" class="col-sm-5 control-label">Imię</label>
                                        <div class="col-sm-7">
                                            <input type="text"
                                                   class="form-control"
                                                   id="firstName"
                                                   placeholder="Imię"
                                                   ng-model="advertisement.firstName"
                                                   autofocus>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="age" class="col-sm-5 control-label">Wiek</label>
                                        <div class="col-sm-7">
                                            <input type="text"
                                                   class="form-control"
                                                   id="age"
                                                   placeholder="Wiek"
                                                   ng-model="advertisement.age">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="height" class="col-sm-5 control-label">Wzrost (cm)</label>
                                        <div class="col-sm-7">
                                            <input type="text"
                                                   class="form-control"
                                                   id="height"
                                                   placeholder="Wzrost (cm)"
                                                   ng-model="advertisement.height">
                                        </div>
                                    </div>
                                </form>
                            </div>
                            <div class="panel-body" ng-if="step==1">
                                <legend>Krok 2: Preferencje</legend>
                                <form class="form-horizontal">
                                    <div class="form-group">
                                        <label for="lookingFor" class="col-sm-5 control-label">Szukam</label>
                                        <div class="col-sm-7">
                                            <select class="form-control" ng-model="advertisement.lookingFor" id="lookingFor">
                                                <option value="man">partnera</option>
                                                <option value="woman">partnerki</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="style" class="col-sm-5 control-label">Styl tańca</label>
                                        <div class="col-sm-7">
                                            <input type="text"
                                                   class="form-control"
                                                   id="style"
                                                   placeholder="Styl tańca"
                                                   ng-model="advertisement.style">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="comment" class="col-sm-5 control-label">Komentarz</label>
                                        <div class="col-sm-7">
                                            <textarea class="form-control" id="comment" rows="3" ng-model="advertisement.comment"></textarea>
                                        </div>
                                    </div>
                                </form>
                            </div>
                            <div class="panel-body" ng-if="step==2">
                                <legend>Krok 3: Doświadczenie taneczne</legend>
                            </div>
                            <div class="panel-body" ng-if="step==3">
                                <legend>Krok 4: Dane kontaktowe</legend>
                            </div>
                            <div class="panel-footer">
                                <div class="row">
                                    <div class="col-xs-12">
                                        <button class="pull-left btn btn-default"
                                                ng-click="previous()"
                                                ng-if="step>0">Wstecz</button>
                                        <button class="pull-right btn btn-primary"
                                                ng-click="next()" ng-if="step<3">Dalej</button>
                                        <button class="pull-right btn btn-success"
                                                ng-click="send()" ng-if="step==3">Wyślij</button>
                                        <p class="text-center">step {{step+1}}</p>
                                    </div>
                                </div>

                            </div>
                            <div class="panel-body">
                                <pre>{{advertisement|json}}</pre>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-4 search-container">
                <div class="panel panel-default col-xs-12" style="padding: 0">
                    <div class="panel-body">
                        <div class="fb-page"
                             data-href="https://www.facebook.com/setenta.taniec/"
                             data-tabs="timeline"
                             data-small-header="false"
                             data-adapt-container-width="true"
                             data-hide-cover="false"
                             data-show-facepile="true">
                            <blockquote cite="https://www.facebook.com/setenta.taniec/"
                                        class="fb-xfbml-parse-ignore">
                                <a href="https://www.facebook.com/setenta.taniec/">Szkoła tańca Setenta</a>
                            </blockquote>
                        </div>
                    </div>
                </div>

                <div class="panel panel-default col-xs-12">

                    <h3 class="col-sm-12">Honorujemy</h3>

                    <div class="col-sm-12">
                        <a class="fitflex thumbnail" target="_blank" href="http://www.fitflex.pl">
                            <img src="<?php bloginfo('template_url'); ?>/assets/img/sys/fitflex.jpg"/>
                        </a>
                    </div>
                    <div class="col-sm-12">
                        <a class="oksystem thumbnail" target="_blank" href="http://www.oksystem.pl">
                            <img src="<?php bloginfo('template_url'); ?>/assets/img/sys/oksystem.png"/>
                        </a>
                    </div>
                    <div class="col-sm-12">
                        <a class="foryoucard thumbnail" target="_blank" href="https://www.4youcard.pl/">
                            <img src="<?php bloginfo('template_url'); ?>/assets/img/sys/4ucard.png"/>
                        </a>
                    </div>
                </div>
            </div>
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
                         alt="barbara radomska karpinska"/>
                </div>
                <div class="item">
                    <img src="
                    <?php bloginfo('template_url'); ?>/assets/img/instructors/pawel-radomski.jpg"
                         alt="pawel radomski"/>
                </div>
                <div class="item">
                    <img src="
                    <?php bloginfo('template_url'); ?>/assets/img/instructors/magda-mroz.jpg"
                         alt="magda mroz"/>
                </div>
                <div class="item">
                    <img src="
                    <?php bloginfo('template_url'); ?>/assets/img/instructors/jacek-sztorc.jpg"
                         alt="jacek sztorc"/>
                </div>
                <div class="item">
                    <img src="
                    <?php bloginfo('template_url'); ?>/assets/img/instructors/magda-mazij.jpg"
                         alt="magda mazij"/>
                </div>
                <div class="item">
                    <img src="
                    <?php bloginfo('template_url'); ?>/assets/img/instructors/julia-utig.jpg"
                         alt="julia utig"/>
                </div>
                <div class="item">
                    <img src="
                    <?php bloginfo('template_url'); ?>/assets/img/instructors/marta-wegrzynowska.jpg"
                         alt="marta wegrzynowska"/>
                </div>
                <a class="item" href="/marta-mostek-moscicka">
                    <img src="<?php bloginfo('template_url'); ?>/assets/img/instructors/marta-moscicka.jpg" title="marta mostek mo�cicka" alt="marta mostek mo�cicka"/>
                </a>
                <div class="item">
                    <img src="
                    <?php bloginfo('template_url'); ?>/assets/img/instructors/martyna-olszewska.jpg"
                         alt="martyna olszewska"/>
                </div>
            </div>
        </div>
    </div>
    <script>
        angular.module('test', [])
            .run(function ($rootScope) {
                $rootScope.step = 0;
                $rootScope.advertisement = {lookingFor: 'man'};
                $rootScope.next = function () {
                    if ($rootScope.step < 3) {
                        $rootScope.step++;
                    }
                };
                $rootScope.previous = function () {
                    if ($rootScope.step > 0) {
                        $rootScope.step--;
                    }
                };
            })
    </script>
<?php get_footer(); ?>