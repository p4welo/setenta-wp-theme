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
<!--                    <h2>-->
<!--                        <i class="glyphicon glyphicon-map-marker"></i>-->
<!--                        Kontakt-->
<!--                    </h2>-->

                    <div class="col-sm-6 col-xs-12 body-content">
                        <address>
                            <strong>Szkoła tańca Setenta<br/>
                                Barbara Radomska</strong><br/>
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
                        <h2 style="margin-top: 50px">
                            <i class="fa fa-credit-card"></i>
                            Konto bankowe
                        </h2>

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
    <script src="http://maps.google.com/maps/api/js?sensor=false" type="text/javascript"></script>
<?php get_footer(); ?>