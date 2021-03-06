<?php
/*
Template Name: Kontakt
*/
?>

<?php get_header(); ?>
  <div class="page m-t-64">
    <!--            <div class="map" id="mapka"></div>-->
    <div>
      <div class="container" style="padding-top: 20px">
        <h1>Kontakt</h1>
        <div class="row">
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
              <strong>39 1140 2004 0000 3802 7807 7899</strong>
              <p>mBank</p>
<!--              <strong>23 1050 1575 1000 0091 4397 2439</strong>-->
<!--              <p>ING Bank Śląski</p>-->
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
  </div>
  <div class="instructor-row">
    <div class="container">
      <h2>INSTRUKTORZY</h2>
    </div>
  </div>
  <div class="instructor-row">
    <div class="container">
      <div class="owl-carousel">
        <div class="item">
          <img src="
                    <?php bloginfo('template_url'); ?>/assets/img/instructors/barbara-radomska.jpg"
               alt="barbara radomska karpinska"/>
        </div>
        <div class="item">
          <img src="
                    <?php bloginfo('template_url'); ?>/assets/img/instructors/pawel-radomski.jpg"
               alt="pawel radomski"/>
        </div>
        <div class="item">
          <img src="
                    <?php bloginfo('template_url'); ?>/assets/img/instructors/magda-mroz.jpg"
               alt="magda mroz"/>
        </div>
        <div class="item">
          <img src="
                    <?php bloginfo('template_url'); ?>/assets/img/instructors/jacek-sztorc.jpg"
               alt="jacek sztorc"/>
        </div>
        <div class="item">
          <img src="
                    <?php bloginfo('template_url'); ?>/assets/img/instructors/magda-mazij.jpg"
               alt="magda mazij"/>
        </div>
        <div class="item">
          <img src="
                    <?php bloginfo('template_url'); ?>/assets/img/instructors/julia-utig.jpg"
               alt="julia utig"/>
        </div>
        <div class="item">
          <img src="
                    <?php bloginfo('template_url'); ?>/assets/img/instructors/marta-wegrzynowska.jpg"
               alt="marta wegrzynowska"/>
        </div>
        <a class="item" href="/marta-mostek-moscicka">
          <img src="<?php bloginfo('template_url'); ?>/assets/img/instructors/marta-moscicka.jpg"
               title="marta mostek mo�cicka" alt="marta mostek mo�cicka"/>
        </a>
        <div class="item">
          <img src="
                    <?php bloginfo('template_url'); ?>/assets/img/instructors/martyna-olszewska.jpg"
               alt="martyna olszewska"/>
        </div>
      </div>
    </div>
  </div>
  <!--    <script src="http://maps.google.com/maps/api/js?sensor=false" type="text/javascript"></script>-->
  <!--    <script>-->
  <!--        $(document).ready(function () {-->
  <!--            var elementId = 'mapka';-->
  <!--            var markerId = 'http://setenta.wroclaw.pl/wp-content/uploads/2016/12/marker-logo.png';-->
  <!--            var wspolrzedne = new google.maps.LatLng(51.1172973, 17.0430937);-->
  <!--            var opcjeMapy = {-->
  <!--                zoom: 17,-->
  <!--                center: wspolrzedne,-->
  <!--                scrollwheel: false,-->
  <!--                keyboardShortcuts: false,-->
  <!--                mapTypeId: google.maps.MapTypeId.ROADMAP,-->
  <!--                panControl: false,-->
  <!--                zoomControl: true,-->
  <!--                zoomControlOptions: {-->
  <!--                    style: google.maps.ZoomControlStyle.SMALL,-->
  <!--                    position: google.maps.ControlPosition.LEFT-->
  <!--                },-->
  <!--                scaleControl: true-->
  <!--            };-->
  <!--            var mapa = new google.maps.Map(document.getElementById(elementId), opcjeMapy);-->
  <!--            var rozmiar = new google.maps.Size(60, 25);-->
  <!--            var punkt_startowy = new google.maps.Point(0, 0);-->
  <!--            var punkt_zaczepienia = new google.maps.Point(50, 10);-->
  <!--            new google.maps.Marker({-->
  <!--                position: wspolrzedne,-->
  <!--                map: mapa,-->
  <!--                icon: new google.maps.MarkerImage(markerId, rozmiar, punkt_startowy, punkt_zaczepienia)-->
  <!--            });-->
  <!--        })-->
  <!--    </script>-->

<?php get_footer(); ?>