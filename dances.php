<?php
/*
Template Name: Style taneczne
*/
?>

<?php get_header(); ?>
    <div ng-app="setenta" ng-cloak>
        <div class="registration-row row" ng-controller="registrationCtrl">
            <div class="container">
                <h2 class="col-sm-12">ZAPISY DO NOWYCH GRUP</h2>

                <div class="registration-grid text-center row">
                    <div ng-if="courseLoading" class="text-center">
                        <i class="fa fa-spin fa-spinner"></i>
                        �adowanie...
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
        <div class="schedule-page">
            Style taneczne
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
                             alt="barbara radomska karpi�ska"/>
                    </div>
                    <div class="item">
                        <img src="
                    <?php bloginfo('template_url'); ?>/dist/assets/img/instructors/pawel-radomski.jpg"
                             alt="pawe� radomski"/>
                    </div>
                    <div class="item">
                        <img src="
                    <?php bloginfo('template_url'); ?>/dist/assets/img/instructors/magda-mroz.jpg"
                             alt="magda mr�z"/>
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
                             alt="marta w�grzynowska"/>
                    </div>
                    <a class="item" href="/marta-mostek-moscicka">
                        <img src="<?php bloginfo('template_url'); ?>/dist/assets/img/instructors/marta-moscicka.jpg"
                             title="marta mostek mo�cicka" alt="marta mostek mo�cicka"/>
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