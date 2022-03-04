<?php
/*
Template Name: NEW  Cennik
*/
?>

<?php get_header(); ?>
  <div class="pricelist-page m-t-64">
    <div class="container">
      <h1>Cennik zajęć tanecznych</h1>
      <div class="row">
        <div class="col-sm-8">
          <div class="alert alert-danger animated shake">Niewykorzystaną lekcję można odrobić w ciągu <u>dwóch
              tygodni</u>
            podczas
            zajęć w dowolnej technice.
          </div>
          <div class="panel panel-default">
            <div class="panel-body">
              <legend>Dorośli</legend>
              <dl class="dl-horizontal">
                <dt>30 zł</dt>
                <dd>Pojedyncze wejście (1h)</dd>
              </dl>
              <dl class="dl-horizontal emphasize">
                <dt>90 zł</dt>
                <dd>Karnet <strong>miesięczny</strong> STANDARD na 4 zajęcia (4 x 1h)</dd>
              </dl>
              <dl class="dl-horizontal">
                <dt>150 zł</dt>
                <dd>Karnet <strong>miesięczny</strong> na 8 zajęć (8 x 1h)</dd>
              </dl>
              <dl class="dl-horizontal">
                <dt>280 zł</dt>
                <dd>Karnet <strong>miesięczny</strong> OPEN na wszystkie zajęcia</dd>
              </dl>
            </div>
          </div>

          <div class="panel panel-default">
            <div class="panel-body">
              <legend>Dzieci</legend>
              <dl class="dl-horizontal">
                <dt>30 zł</dt>
                <dd>Pojedyncze wejście (45min)</dd>
              </dl>
              <dl class="dl-horizontal">
                <dt>80 zł</dt>
                <dd>Karnet <strong>miesięczny</strong> na 4 zajęcia (4 x <strong>45min</strong>)
                </dd>
              </dl>
              <dl class="dl-horizontal">
                <dt>135 zł</dt>
                <dd>Karnet <strong>miesięczny</strong> na 8 zajęć (8 x <strong>45min</strong>)</dd>
              </dl>
              <dl class="dl-horizontal">
                <dt>150 zł</dt>
                <dd>Karnet <strong>miesięczny</strong> na 8 zajęć (8 x <strong>1h</strong>) - formacja
                  taneczna
                </dd>
              </dl>
              <dl class="dl-horizontal">
                <dt>200 zł</dt>
                <dd>Karnet <strong>miesięczny</strong> na 16 zajęć (16 x <strong>1h</strong>) - formacja
                  taneczna
                </dd>
              </dl>
            </div>
          </div>

          <div class="panel panel-default">
            <div class="panel-body">
              <legend>Studenci / doktoranci (za okazaniem legitymacji)</legend>
              <dl class="dl-horizontal">
                <dt>30 zł</dt>
                <dd>Pojedyncze wejście (1h)</dd>
              </dl>
              <dl class="dl-horizontal">
                <dt>75 zł</dt>
                <dd>Karnet <strong>miesięczny</strong> na 4 zajęcia (4 x 1h)</dd>
              </dl>
            </div>
          </div>

          <div class="panel panel-default">
            <div class="panel-body">
              <legend>Seniorzy (zajęcia dedykowane)</legend>
              <dl class="dl-horizontal">
                <dt>12 zł</dt>
                <dd>Pojedyncze wejście (1h)</dd>
              </dl>
              <dl class="dl-horizontal">
                <dt>40 zł</dt>
                <dd>Karnet <strong>miesięczny</strong> na 4 zajęcia (4 x 1h)</dd>
              </dl>
            </div>
          </div>

          <div class="panel panel-default">
            <div class="panel-body">
              <legend>Zajęcia indywidualne</legend>
              <dl class="dl-horizontal">
                <dt>110 zł</dt>
                <dd>Lekcja indywidualna (1h)</dd>
              </dl>
<!--              <dl class="dl-horizontal">-->
<!--                <dt>310 zł</dt>-->
<!--                <dd>Pierwszy taniec - karnet na 4 wejścia (4 x 1h) do wykorzystania w dowolnym okresie-->
<!--                </dd>-->
<!--              </dl>-->
            </div>
          </div>
        </div>
        <div class="col-sm-4 search-container">
          <?php get_template_part('sidebar'); ?>
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
  </div>
<?php get_footer(); ?>
