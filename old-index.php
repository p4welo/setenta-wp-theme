<?php get_header(); ?>
    <div class="page index-page">
        <div class="img-header team-header jumbotron">
            <div class="container">
                <img src="<?php bloginfo('template_url'); ?>/assets/img/sys/1.png" alt="salsa wrocław"
                     class="hidden-xs"/>
                <img src="<?php bloginfo('template_url'); ?>/assets/img/sys/2.png" alt="taniec towarzyski wrocław"
                     class="hidden-xs"/>
                <img src="<?php bloginfo('template_url'); ?>/assets/img/sys/3.png" alt="taniec dzieci wrocław"
                     class="hidden-xs"/>
                <img src="<?php bloginfo('template_url'); ?>/assets/img/sys/4.png" alt="pierwszy taniec wrocław"
                     class="hidden-xs"/>
            </div>
        </div>

        <div class="body-cover">
            <div class="container main-content staff-content">
                <div class="body-content news-content">
                    <h2>&nbsp;</h2>

                    <div class="row">
                        <div class="col-sm-7">
                            <h2>
                                <i class="glyphicon glyphicon-fire"></i>
                                Aktualności
                            </h2>
                            <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
                                <div class="panel panel-default">
                                    <div class="panel-body">
                                        <legend>
                                            <h4>
                                                <a class="post-link"
                                                   href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                                                <small class="pull-right"><?php the_time('Y-m-d'); ?></small>
                                            </h4>
                                        </legend>
                                        <div class="media">
                                    <span class="thumbnail">
                                        <?php the_post_thumbnail('full', array('class' => 'media-object')); ?>
                                    </span>

                                            <div class="media-body">
                                                <?php
                                                the_content('Czytaj dalej &rarr;');
                                                ?>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            <?php endwhile;
                            else: ?>
                                <p><?php _e('Nie znaleziono postów spełniających podane kryteria.'); ?></p>
                            <?php endif; ?>
                        </div>

                        <div class="col-sm-5 text-right">
                            <h2>
                                <i class="glyphicon glyphicon-gift"></i>
                                Honorujemy:
                            </h2>

                            <div class="row">
                                <a target="_blank" href="http://www.oksystem.pl">
                                    <img src="<?php bloginfo('template_url'); ?>/assets/img/oksystem.png"/>
                                </a>
                            </div>
                            <div class="row">
                                <a target="_blank" href="https://www.4youcard.pl/">
                                    <img style="background-color: black; padding: 17px; margin-top: 20px" src="<?php bloginfo('template_url'); ?>/assets/img/4ucard.png"/>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php get_footer(); ?>