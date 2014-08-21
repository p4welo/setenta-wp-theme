<?php get_header(); ?>



    <!--<div class="row subheader">-->
    <!--    <div class="container">-->
    <!--    <div class="">-->
    <!--        <div class="box-image col-md-3">-->
    <!--            <img src="http://setenta.wroclaw.pl/img/sys/1.png"/>-->
    <!---->
    <!--        </div>-->
    <!--        dupa-->
    <!--    </div>-->
    <!--    </div>-->
    <!--</div>-->

    <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
        <!-- Indicators -->
        <div class="carousel-indicators-down animated bounce">
            <a href="#" id="slide-down" class="wobble-vertical">
                <i class="glyphicon glyphicon-chevron-down"></i>
            </a>
        </div>
        <!--    <ol class="carousel-indicators">-->
        <!--        <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>-->
        <!--        <li data-target="#carousel-example-generic" data-slide-to="1"></li>-->
        <!--        <li data-target="#carousel-example-generic" data-slide-to="2"></li>-->
        <!--    </ol>-->

        <!-- Wrapper for slides -->
        <div class="carousel-inner">
            <div class="item active">
                <img src="<?php bloginfo('template_url'); ?>/img/slide-ballroom.jpg" alt="dupa">

<!--                <div class="carousel-caption animated bounceInLeft">-->
<!--                    ddasasd-->
<!--                </div>-->
            </div>
            <div class="item">
                <img src="<?php bloginfo('template_url'); ?>/img/slide-solo.jpg" alt="dupa">

<!--                <div class="carousel-caption">-->
<!--                    adqeqwe-->
<!--                </div>-->
            </div>
        </div>

        <!-- Controls -->
        <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
            <span class="glyphicon glyphicon-chevron-left"></span>
        </a>
        <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
            <span class="glyphicon glyphicon-chevron-right"></span>
        </a>
    </div>

    <div id="main-content" style="width: 100%; background-color: white;">
        <div class="container">
            <div class="col-md-7">
                <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
                    <div class="panel post">
                        <div class="post-thumbnail">
                            <?php
                            if (has_post_thumbnail()) {
                                the_post_thumbnail();
                            }
                            ?>
                        </div>
                        <div class="panel-body">
                            <legend>
                                <h2>
                                    <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>

                                </h2>
                            </legend>
                            <div class="media">
                                <?php
                                the_content('Czytaj dalej &rarr;');
                                ?>
                            </div>
                        </div>
                    </div>

                <?php endwhile;
                else: ?>
                    <p><?php _e('Nie znaleziono postów spełniających podane kryteria.'); ?></p>
                <?php endif; ?>
            </div>
            <div class="col-sm-3"></div>
        </div>
    </div>
<?php get_footer(); ?>