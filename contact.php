<?php
/*
Template Name: Kontakt
*/
?>

<?php get_header(); ?>
    <div class="page">
            <div class="map" id="mapka"></div>

            <div>
                <div class="container">
                    <div class="col-sm-6 col-xs-12 body-content">
                        <address>
                            <h2>Szkoła tańca Setenta</h2>
                            NIP: 6972131230<br/>
                            ul. Sienkiewicza 6A<br/>
                            50-335 Wrocław<br/>

                            <h4>
                                <i class="glyphicon glyphicon-phone-alt"></i>
                                695 081 437
                            </h4>
                            <h4>
                                <a href="mailto:kontakt@setenta.wroclaw.pl">
                                    <i class="glyphicon glyphicon-envelope"></i>
                                    kontakt@setenta.wroclaw.pl
                                </a>
                            </h4>
                        </address>
                        <h3 style="margin-top: 50px">
                            Konto bankowe
                        </h3>

                        <div>
                            <strong>23 1050 1575 1000 0091 4397 2439</strong>
                            <p>ING Bank Śląski</p>
                        </div>
                    </div>
                    <div class="col-sm-6 col-xs-12 pull-right right-container">
                        <a class="thumbnail">
                            <img class="media-object"
                                 src="<?php bloginfo('template_url'); ?>/assets/img/photos/lewitacja1.jpg"
                                 alt="zespół pokazowy"/>
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
    <script src="http://maps.google.com/maps/api/js?sensor=false" type="text/javascript"></script>
<?php get_footer(); ?>