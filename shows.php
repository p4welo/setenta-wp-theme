<?php
/*
Template Name: Pokazy
*/
?>

<?php get_header(); ?>
  <div class="m-t-64">
    <div class="shows-page">
      <div class="container">
        <h1>Pokazy tańca</h1>
        <div class="row">
          <div class="col-md-8 col-sm-7 col-xs-12">
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
          <div class="col-md-4 col-sm-5 col-xs-12 pull-right right-container">
            <a class="thumbnail">
              <img class="media-object"
                   src="<?php bloginfo('template_url'); ?>/assets/img/photos/akrobaci.jpg"
                   alt="pokazy akrobatów"/> </a>
          </div>
        </div>
      </div>
    </div>
    <div id="application">
      <chat></chat>
    </div>
  </div>
<?php get_footer(); ?>