<?php
/*
Template Name: Partner do tanca
*/
?>
<?php get_header(); ?>
  <div class="news-page m-t-64">
  <div class="news-content partner-content single-page row">
    <div class="container">
      <div class="row">
        <div class="col-sm-8">
          <div class="panel panel-default post-panel">
            <div class="panel-body">
              <img src="http://setenta.wroclaw.pl/wp-content/uploads/2017/03/Partner-1.png" alt="partner do
                    tanca wroclaw"
                  class="thumbnail col-xs-12">
              <noscript>
                <div class="alert alert-danger">Do prawidłowego działanie potrzebna jest
                  włączona obsługa JavaScript w przeglądarce!
                </div>
              </noscript>
              <partner id="application"></partner>
            </div>
          </div>
        </div>
        <div class="col-sm-4 search-container">
          <?php get_template_part('sidebar'); ?>
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
<?php get_footer(); ?>