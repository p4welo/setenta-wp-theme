<?php
/*
Template Name: Pokazy
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
    <div class="shows-page">
        <div class="container">
            <h2 class="col-sm-12">
                POKAZY TAŃCA
            </h2>

            <div class="col-md-8 col-sm-7 col-xs-12">
                <div class="col-xs-12">
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
            </div>
            <div class="col-md-4 col-sm-5 col-xs-12 pull-right right-container">
                <a class="thumbnail">
                    <img class="media-object"
                         src="<?php bloginfo('template_url'); ?>/assets/img/photos/akrobaci.jpg"
                         alt="pokazy akrobatów"/> </a>
            </div>
        </div>
    </div>
    </div>
<?php get_footer(); ?>