<?php
/*
Template Name: Pokazy
*/
?>

<?php get_header(); ?>
    <div ng-app="setenta">
        <div class="registration-row row" ng-cloak>
            <div class="container" ng-controller="registrationCtrl">
                <h2 class="col-sm-12">ZAPISY DO NOWYCH GRUP</h2>

                <div class="registration-grid text-center row">
                    <div ng-if="courseLoading" class="text-center">
                        <i class="fa fa-spin fa-spinner"></i>
                        Ładowanie...
                    </div>

                    <figure class="col-md-3 col-lg-2 col-sm-4" ng-repeat="group in courseGroups" ng-if="!courseLoading">
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
        <div class="shows-page">
            <div class="container">
                <div class="col-md-8 col-sm-7 col-xs-12">
                    <p>
                        Naszymi klientami są agencje artystyczne, promocyjno-eventowe, agencje modeli i
                        modelek, ośrodki
                        hotelowe, a także managerowie galerii handlowych, samodzielne firmy oraz osoby
                        prywatne.</p>

                    <p>Od 2009 roku uświetniamy firmowe imprezy, wesela oraz festyny. Występowaliśmy
                        podczas pokazów
                        mody w
                        galeriach handlowych. </p>

                    <div class="embed-responsive embed-responsive-16by9" style="margin-bottom: 50px">
                        <iframe class="embed-responsive-item"
                                src="http://www.youtube.com/embed/6hhJmD-My5g"></iframe>
                    </div>

                    <p>
                        Organizujemy również pokazy mody urozmaicane pokazami artystów, akrobatów,
                        tancerzy: </p>

                    <div class="embed-responsive embed-responsive-16by9">
                        <iframe class="embed-responsive-item"
                                src="http://www.youtube.com/embed/hUYLxSIiNbA"></iframe>
                    </div>
                </div>
                <div class="col-md-4 col-sm-5 col-xs-12 pull-right right-container">
                    <a class="thumbnail">
                        <img class="media-object"
                             src="<?php bloginfo('template_url'); ?>/dist/assets/img/photos/akrobaci.jpg"
                             alt="pokazy akrobatów"/> </a>
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
                    <?php bloginfo('template_url'); ?>/dist/assets/img/instructors/barbara-radomska.jpg"
                             alt="barbara radomska karpińska"/>
                    </div>
                    <div class="item">
                        <img src="
                    <?php bloginfo('template_url'); ?>/dist/assets/img/instructors/pawel-radomski.jpg"
                             alt="paweł radomski"/>
                    </div>
                    <div class="item">
                        <img src="
                    <?php bloginfo('template_url'); ?>/dist/assets/img/instructors/magda-mroz.jpg"
                             alt="magda mróz"/>
                    </div>
                    <div class="item">
                        <img src="
                    <?php bloginfo('template_url'); ?>/dist/assets/img/instructors/kasia-michalak.jpg"
                             alt="kasia michalak"/>
                    </div>
                    <div class="item">
                        <img src="
                    <?php bloginfo('template_url'); ?>/dist/assets/img/instructors/julia-utig.jpg"
                             alt="julia utig"/>
                    </div>
                    <div class="item">
                        <img src="
                    <?php bloginfo('template_url'); ?>/dist/assets/img/instructors/marta-wegrzynowska.jpg"
                             alt="marta węgrzynowska"/>
                    </div>
                    <a class="item" href="/marta-mostek-moscicka">
                        <img src="<?php bloginfo('template_url'); ?>/dist/assets/img/instructors/marta-moscicka.jpg"
                             title="marta mostek mościcka" alt="marta mostek mościcka"/>
                    </a>

                    <div class="item">
                        <img src="
                    <?php bloginfo('template_url'); ?>/dist/assets/img/instructors/martyna-olszewska.jpg"
                             alt="martyna olszewska"/>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php get_footer(); ?>