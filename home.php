<?php get_header(); ?>
  <script type="text/ng-template" id="myModalContent.html">
    <div class="modal-header">
      <h3 class="modal-title" id="modal-title">I'm a modal!</h3>
    </div>
    <div class="modal-body" id="modal-body">
      Selected: <b>{{ course|json }}</b>
    </div>
    <div class="modal-footer">
      <button class="btn btn-primary" type="button" ng-click="$ctrl.ok()">OK</button>
      <button class="btn btn-warning" type="button" ng-click="$ctrl.cancel()">Cancel</button>
    </div>
  </script>
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
          <h1>Aktualności</h1>
          <div class="row">
            <div class="col-sm-8">
              <news-feed id="application"></news-feed>
            </div>
            <div class="col-sm-4 search-container">
              <!--                    <a href="/partner-do-tanca-wroclaw" class="thumbnail col-xs-12" style="padding: 0">-->
              <!--                        <img src="/wp-content/uploads/2016/12/Szukasz-1-1-e1481231364648.png"-->
              <!--                             alt="Partner do tańca wrocław">-->
              <!--                    </a>-->

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

        <noscript>
          <div class="container">
            <div class="col-sm-8">
              <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
                <div class="col-sm-12 panel panel-default post-panel">
                  <?php the_post_thumbnail('full', array('class' => 'thumbnail col-sm-12 col-xs-12')); ?>

                  <div class="col-sm-12">
                    <h2>
                      <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                    </h2>
                  </div>
                </div>
              <?php endwhile;
              else: ?>
                <p><?php _e('Nie znaleziono postów spełniających podane kryteria.'); ?></p>
              <?php endif; ?>
            </div>
          </div>
        </noscript>
      </div>
    </div>
    <script src="<?php bloginfo('template_url'); ?>/bundle.js?@@version"></script>
<?php get_footer(); ?>