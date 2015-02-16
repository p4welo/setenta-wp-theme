<?php
/*
Template Name: NEW Instruktorzy
*/
?>
<?php get_header(); ?>
    <div class="registration-row row" ng:app="setenta">
        <div class="container" ng:controller="registrationCtrl">
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
    <div class="instrucors-page row">
        <div class="container">
            <div class="col-xs-6 col-lg-3">
                <div class="team-member">
                    <a class="grayHover" href="javascript:void(0)">
                        <img src="<?php bloginfo('template_url'); ?>/assets/img/photos/bk.jpg"
                             class="col-xs-12 img-circle"
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
                        <img src="<?php bloginfo('template_url'); ?>/assets/img/photos/pr2.jpg"
                             class="col-xs-12 img-circle"
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
                        <img src="<?php bloginfo('template_url'); ?>/assets/img/photos/mm2.jpg"
                             class="col-xs-12 img-circle"
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
                             class="col-xs-12 img-circle" alt="MARTA 'MOSTEK' MOŚCICKA"
                             title="MARTA 'MOSTEK' MOŚCICKA">
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
<?php get_footer(); ?>