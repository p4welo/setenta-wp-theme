<?php get_header(); ?>
<div class="news-page" ng:app="setenta" ng-cloak>
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
    <div class="news-content single-page row">
        <div class="container">
            <div class="col-sm-8">
                <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
                    <div class="col-sm-12 panel panel-default post-panel">
                        <?php the_post_thumbnail('full', array('class' => 'thumbnail col-sm-12 col-xs-12')); ?>

                        <div class="col-sm-12">
<!--                            <small class="date-area">-->
<!--                                <i class="fa fa-calendar-o text-danger"></i>-->
<!--                                21 cze 2015-->
<!--                            </small>-->
<!--                            <small class="category-area">-->
<!--                                <i class="fa fa-folder-open-o text-danger"></i>-->
<!--                                NOWE GRUPY-->
<!--                            </small>-->

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
            <div class="col-sm-4 search-container">
                <h3>Honorujemy</h3>

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
                <div class="fb-like-box" data-href="https://www.facebook.com/setenta.taniec" data-colorscheme="light" data-show-faces="true" data-header="true" data-stream="true" data-show-border="true"></div>
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
                <div class="item">
                    <img src="
                    <?php bloginfo('template_url'); ?>/assets/img/instructors/marta-moscicka.jpg"
                         alt="marta mostek mościcka"/>
                </div>
                <div class="item">
                    <img src="
                    <?php bloginfo('template_url'); ?>/assets/img/instructors/martyna-olszewska.jpg"
                         alt="martyna olszewska"/>
                </div>

            </div>
        </div>
    </div>
<?php get_footer(); ?>