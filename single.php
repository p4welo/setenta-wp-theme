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
    <div class="news-page row">
        <div class="news-content container">
            <?php
            the_content('Czytaj dalej &rarr;');
            ?>
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
                    <?php bloginfo('template_url'); ?>/new/assets/img/instructors/barbara-radomska.jpg"
                         alt="barbara radomska karpińska"/>
                </div>
                <div class="item">
                    <img src="
                    <?php bloginfo('template_url'); ?>/new/assets/img/instructors/pawel-radomski.jpg"
                         alt="paweł radomski"/>
                </div>
                <div class="item">
                    <img src="
                    <?php bloginfo('template_url'); ?>/new/assets/img/instructors/magda-mroz.jpg"
                         alt="magda mróz"/>
                </div>
                <div class="item">
                    <img src="
                    <?php bloginfo('template_url'); ?>/new/assets/img/instructors/kasia-michalak.jpg"
                         alt="kasia michalak"/>
                </div>
                <div class="item">
                    <img src="
                    <?php bloginfo('template_url'); ?>/new/assets/img/instructors/julia-utig.jpg"
                         alt="julia utig"/>
                </div>
                <div class="item">
                    <img src="
                    <?php bloginfo('template_url'); ?>/new/assets/img/instructors/marta-wegrzynowska.jpg"
                         alt="marta węgrzynowska"/>
                </div>
                <div class="item">
                    <img src="
                    <?php bloginfo('template_url'); ?>/new/assets/img/instructors/marta-moscicka.jpg"
                         alt="marta mostek mościcka"/>
                </div>
                <div class="item">
                    <img src="
                    <?php bloginfo('template_url'); ?>/new/assets/img/instructors/martyna-olszewska.jpg"
                         alt="martyna olszewska"/>
                </div>

            </div>
        </div>
    </div>
    </div>
<?php get_footer(); ?>