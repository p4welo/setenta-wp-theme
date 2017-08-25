<?php get_header(); ?>
  <div class="news-page">
  <div class="slider-area" id="home" style="background: rgba(0, 0, 0, 0) url(<?php bloginfo('template_url');
  ?>/assets/img/carousel/2.jpg) no-repeat scroll center 50% / cover;">
    <div class="container-fluid">
      <div class="">
        <div class="col-lg-12">
          <div class="slider-content-wrapper row text-center">
            <a href="/grafik/" class="btn btn-lg btn-success animated fadeInDown btn-callToAction"
               style="top:
                            50vh;margin: 0 auto;font-size: 24px;
                            position: relative;
                            ">PRZEJDŹ DO GRAFIKU</a>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div>
    <div class="news-content " id="news">
      <div class="container">
        <div class="row promotion-row">

          <div class="col-sm-4">
            <a href="/grafik/" class="thumbnail">
              <img src="/wp-content/uploads/2017/08/grafik.png" alt="Grafik zajęć tanecznych">
              <div class="caption text-center">
                <h3>Nowy grafik 2017/18</h3>
              </div>
            </a>
          </div>
          <div class="col-sm-4">
            <a href="/partner-do-tanca-wroclaw" class="thumbnail">
              <img src="/wp-content/uploads/2017/08/partner.png" alt="Szukam partnera do
              tańca Wrocław">
              <div class="caption text-center">
                <h3>Szukam partnera do tańca</h3>
              </div>
            </a>
          </div>
        </div>
        <h1>Aktualności</h1>
        <div class="row">
          <div class="col-sm-8">
            <noscript>
              <div class="alert alert-danger">Do prawidłowego działanie potrzebna jest
                włączona obsługa JavaScript w przeglądarce!
              </div>
            </noscript>
            <div id="application">
              <news-feed></news-feed>
              <chat></chat>
            </div>
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
                <a class="fitflex thumbnail" target="_blank" href="http://www.fitflex.pl">
                  <img src="<?php bloginfo('template_url'); ?>/assets/img/sys/fitflex.jpg"/>
                </a>
              </div>
              <div class="col-sm-12">
                <a class="oksystem thumbnail" target="_blank" href="http://www.oksystem.pl">
                  <img src="<?php bloginfo('template_url'); ?>/assets/img/sys/oksystem.png"/>
                </a>
              </div>
              <div class="col-sm-12">
                <a class="foryoucard thumbnail" target="_blank" href="https://www.4youcard.pl/">
                  <img src="<?php bloginfo('template_url'); ?>/assets/img/sys/4ucard.png"/>
                </a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
<?php get_footer(); ?>