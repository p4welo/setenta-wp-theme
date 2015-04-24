<?php
/*
Template Name: NEW Instruktorzy
*/
?>
<?php get_header(); ?>
    <div class="registration-row row" ng-app="setenta" ng-cloak>
        <div class="container" ng-controller="registrationCtrl">
            <h2 class="col-sm-12">ZAPISY DO NOWYCH GRUP</h2>

            <div class="registration-grid text-center row">
                <div ng-if="courseLoading" class="text-center">
                    <i class="fa fa-spin fa-spinner"></i>
                    Ładowanie...
                </div>

                <figure class="col-md-3 col-lg-2 col-sm-4" ng-repeat="group in courseGroups">
                    <img
                        ng-src="<?php bloginfo('template_url'); ?>/dist/assets/img/styles/{{resolveStyleImage(group[0].style)}}"
                        alt="img21">
                    <figcaption>
                        <div>
                            <h3 ng-bind="group[0].style.name"></h3>

                            <p ng-repeat:start="course in group">
                                {{course.day | translate}}
                                {{ course.startTime}}
                            </p>
                            <br ng-repeat:end/>
                        </div>
                    </figcaption>
                </figure>
            </div>
        </div>
    </div>
    <div class="instrucors-page row">
        <div class="container">
            <!--            <h2 class="col-sm-12">INSTRUKTORZY</h2>-->
            <div class="col-xs-6 col-lg-3">
                <div class="team-member">
                    <a class="grayHover" href="javascript:void(0)">
                        <img src="<?php bloginfo('template_url'); ?>/dist/assets/img/instructors/barbara-radomska.jpg"
                             class="col-xs-12 img-circle"
                             alt="barbara karpinska radomska" title="barbara karpinska radomska">
                    </a>

                    <h3>
                        <a href="javascript:void(0)">
                            BARBARA RADOMSKA (KARPIŃSKA)
                        </a>
                    </h3>

                    <div>
                        <h6>Taniec towarzyski, <a href="/salsa-kubanska">Salsa</a>, <a href="/bachata">Bachata</a>, Taniec użytkowy, Pierwszy taniec, Balet
                            dla dzieci, Formacje dziecięce</h6>
                    </div>
                </div>
            </div>
            <div class="col-xs-6 col-lg-3">
                <div class="team-member">
                    <a class="grayHover" href="javascript:void(0)">
                        <img src="<?php bloginfo('template_url'); ?>/dist/assets/img/instructors/pawel-radomski.jpg"
                             class="col-xs-12 img-circle"
                             alt="PAWEŁ RADOMSKI" title="PAWEŁ RADOMSKI">
                    </a>

                    <h3>
                        <a href="javascript:void(0)">
                            PAWEŁ RADOMSKI
                        </a>
                    </h3>

                    <div>
                        <h6><a href="/salsa-kubanska">Salsa kubańska</a>, <a href="/bachata">Bachata</a></h6>
                    </div>
                </div>
            </div>
            <div class="col-xs-6 col-lg-3">
                <div class="team-member">
                    <a class="grayHover" href="javascript:void(0)">
                        <img src="<?php bloginfo('template_url'); ?>/dist/assets/img/instructors/magda-mroz.jpg"
                             class="col-xs-12 img-circle"
                             alt="MAGDA MRÓZ" title="MAGDA MRÓZ">
                    </a>

                    <h3>
                        <a href="javascript:void(0)">
                            MAGDA MRÓZ
                        </a>
                    </h3>

                    <div>
                        <h6>Balet dla dzieci, Mix dance, Zouk</h6>
                    </div>
                </div>
            </div>
            <div class="col-xs-6 col-lg-3">
                <div class="team-member">
                    <a class="grayHover" href="/marta-mostek-moscicka">
                        <img src="<?php bloginfo('template_url'); ?>/dist/assets/img/instructors/marta-moscicka.jpg"
                             class="col-xs-12 img-circle" alt="MARTA 'MOSTEK' MOŚCICKA"
                             title="MARTA 'MOSTEK' MOŚCICKA">
                    </a>

                    <h3>
                        <a href="/marta-mostek-moscicka">
                            MARTA "MOSTEK" MOŚCICKA
                        </a>
                    </h3>

                    <div>
                        <h6>Hip hop</h6>
                    </div>

                </div>
            </div>
            <div class="col-xs-6 col-lg-3">
                <div class="team-member">
                    <a class="grayHover" href="javascript:void(0)">
                        <img src="<?php bloginfo('template_url'); ?>/dist/assets/img/instructors/julia-utig.jpg"
                             class="col-xs-12 img-circle"
                             alt="JULIA UTIG" title="JULIA UTIG">
                    </a>

                    <h3>
                        <a href="javascript:void(0)">
                            JULIA UTIG
                        </a>
                    </h3>

                    <div>
                        <h6>Zouk</h6>
                    </div>
                </div>
            </div>
            <div class="col-xs-6 col-lg-3">
                <div class="team-member">
                    <a class="grayHover" href="javascript:void(0)">
                        <img src="<?php bloginfo('template_url'); ?>/dist/assets/img/instructors/kasia-michalak.jpg"
                             class="col-xs-12 img-circle"
                             alt="KATARZYNA MICHALAK" title="KATARZYNA MICHALAK">
                    </a>

                    <h3>
                        <a href="javascript:void(0)">
                            KATARZYNA MICHALAK
                        </a>
                    </h3>

                    <div>
                        <h6>Taniec towarzyski, Taniec użytkowy, Taniec towarzyski dla dzieci</h6>
                    </div>
                </div>
            </div>
            <div class="col-xs-6 col-lg-3">
                <div class="team-member">
                    <a class="grayHover" href="javascript:void(0)">
                        <img src="<?php bloginfo('template_url'); ?>/dist/assets/img/instructors/marta-wegrzynowska.jpg"
                             class="col-xs-12 img-circle"
                             alt="MARTA WĘGRZYNOWSKA" title="MARTA WĘGRZYNOWSKA">
                    </a>

                    <h3>
                        <a href="javascript:void(0)">
                            MARTA WĘGRZYNOWSKA
                        </a>
                    </h3>

                    <div>
                        <h6>Taniec towarzyski, Taniec użytkowy, Balet dla dzieci, Mix dance</h6>
                    </div>
                </div>
            </div>
            <div class="col-xs-6 col-lg-3">
                <div class="team-member">
                    <a class="grayHover" href="javascript:void(0)">
                        <img src="<?php bloginfo('template_url'); ?>/dist/assets/img/instructors/martyna-olszewska.jpg"
                             class="col-xs-12 img-circle"
                             alt="MARTYNA OLSZEWSKA" title="MARTYNA OLSZEWSKA">
                    </a>

                    <h3>
                        <a href="javascript:void(0)">
                            MARTYNA OLSZEWSKA
                        </a>
                    </h3>

                    <div>
                        <h6>Balet dla dzieci, Balet z elementami gimnastyki artystycznej</h6>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php get_footer(); ?>