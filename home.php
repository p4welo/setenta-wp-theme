<?php get_header(); ?>
  <div class="news-page">
  <div class="slider-area" id="home"
      style="background: rgba(0, 0, 0, 0) url(<?php bloginfo('template_url');
      ?>/assets/img/carousel/2.jpg) no-repeat scroll center 50% / cover;">
    <div class="container-fluid">
      <div class="">
        <div class="col-lg-12">
          <div class="slider-content-wrapper row text-center">
            <a href="/grafik/" class="btn btn-lg btn-success animated fadeInDown btn-callToAction"
                style="top:50vh;margin: 0 auto;font-size: 24px;position: relative;">
              PRZEJDŹ DO GRAFIKU
            </a>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div>
    <div class="news-content " id="news">
      <div class="container">
        <div class="row promotion-row">

          <div class="col-sm-6">
            <a href="/grafik/" class="thumbnail">
              <img src="/wp-content/uploads/2017/08/grafik.png" alt="Grafik zajęć tanecznych">
              <div class="caption text-center">
                <h3>Grafik zajęć tanecznych</h3>
              </div>
            </a>
          </div>
          <div class="col-sm-6">
            <a href="/partner-do-tanca-wroclaw" class="thumbnail">
              <img src="/wp-content/uploads/2017/08/partner.png" alt="Szukam partnera do
              tańca Wrocław">
              <div class="caption text-center">
                <h3>Szukam partnera do tańca</h3>
              </div>
            </a>
          </div>
        </div>
        <div class="row">
          <div class="col-sm-8">
            <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
              <?php get_template_part('entry'); ?>
            <?php endwhile; endif; ?>
          </div>
          <div class="col-sm-4 search-container">
            <div class="panel panel-default col-xs-12" style="padding: 0">
              <div class="panel-body">
                <div class="fb-page"
                    data-href="https://www.facebook.com/setenta.taniec/"
                    data-tabs="timeline"
                    data-small-header="false"
                    data-adapt-container-width="true"
                    data-hide-cover="false"
                    data-show-facepile="true">
                  <blockquote cite="https://www.facebook.com/setenta.taniec/"
                      class="fb-xfbml-parse-ignore">
                    <a href="https://www.facebook.com/setenta.taniec/">Szkoła tańca Setenta</a>
                  </blockquote>
                </div>
              </div>
            </div>

            <div class="panel panel-default col-xs-12">
              <h3 class="col-sm-12">Honorujemy</h3>
              <div class="col-sm-12">
                <span class="fitflex thumbnail">
                  <img src="<?php bloginfo('template_url'); ?>/assets/img/sys/fitflex.jpg"/>
                </span>
              </div>
              <div class="col-sm-12">
                <span class="oksystem thumbnail">
                  <img src="<?php bloginfo('template_url'); ?>/assets/img/sys/oksystem.png"/>
                </span>
              </div>
              <div class="col-sm-12">
                <span class="foryoucard thumbnail">
                  <img src="<?php bloginfo('template_url'); ?>/assets/img/sys/4ucard.png"/>
                </span>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
<?php get_footer(); ?>