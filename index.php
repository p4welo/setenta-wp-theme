<?php get_header(); ?>
    <div class="news-page">
    <div class="news-content single-page row">
        <div class="container">
            <div class="col-sm-8">
                <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
                    <div class="col-sm-12 panel panel-default post-panel">
                        <?php the_post_thumbnail('full', array('class' => 'thumbnail col-sm-12 col-xs-12')); ?>

                        <div class="col-sm-12">
                            <h2>
                                <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                            </h2>

                            <p>
                                <?php
                                the_content('Czytaj dalej &rarr;');
                                ?>
                            </p>
                        </div>
                    </div>
                <?php endwhile;
                else: ?>
                    <p><?php _e('Nie znaleziono postów spełniających podane kryteria.'); ?></p>
                <?php endif; ?>
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
                    <img src="<?php bloginfo('template_url'); ?>/assets/img/instructors/marta-moscicka.jpg" title="marta mostek mo�cicka" alt="marta mostek mo�cicka"/>
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