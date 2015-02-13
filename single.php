<?php get_header(); ?>
    <div class="news-page">
<!--        <div class="registration-row row" ng:controller="registrationCtrl">-->
<!--            <div class="container">-->
<!--                <h2 class="col-sm-12">ZAPISY DO NOWYCH GRUP</h2>-->
<!---->
<!--                <div class="registration-grid text-center row">-->
<!--                    <div ng:if="courseLoading" class="text-center">-->
<!--                        <i class="fa fa-spin fa-spinner"></i>-->
<!--                        Ładowanie...-->
<!--                    </div>-->
<!---->
<!--                    <figure class="col-md-3 col-lg-2 col-sm-4" ng:repeat="group in courseGroups">-->
<!--                        <img-->
<!--                            ng:src="--><?php //bloginfo('template_url'); ?><!--/new/assets/img/styles/{{resolveStyleImage(group[0].style)}}"-->
<!--                            alt="img21">-->
<!--                        <figcaption>-->
<!--                            <div>-->
<!--                                <h3 ng:bind="group[0].style.name"></h3>-->
<!---->
<!--                                <p ng:repeat:start="course in group">-->
<!--                                    {{course.day | translate}}-->
<!--                                    {{ course.startTime}}-->
<!--                                </p>-->
<!--                                <br ng:repeat:end/>-->
<!--                            </div>-->
<!--                        </figcaption>-->
<!--                    </figure>-->
<!--                </div>-->
<!--            </div>-->
<!--        </div>-->
        <div class="news-content row">
            <?php
            the_content('Czytaj dalej &rarr;');
            ?>
        </div>
    </div>
    </div>
<?php get_footer(); ?>