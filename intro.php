<!DOCTYPE html>
<html lang="pl" xmlns="http://www.w3.org/1999/xhtml">

<head>
    <meta charset="<?php bloginfo('charset'); ?>"/>
    <title><?php wp_title(); ?></title>
    <link rel="profile" href="http://gmpg.org/xfn/11"/>

    <link href='http://fonts.googleapis.com/css?family=PT+Sans&subset=latin,latin-ext' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=PT+Sans+Narrow&subset=latin,latin-ext' rel='stylesheet'
          type='text/css'>
    <link href="<?php bloginfo('template_url'); ?>/lib/bower/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet"
          media="screen"/>
    <link href="<?php bloginfo('template_url'); ?>/lib/bower/font-awesome/css/font-awesome.min.css" rel="stylesheet"
          media="screen"/>
    <link rel="stylesheet" href="<?php echo get_stylesheet_uri(); ?>" type="text/css" media="screen"/>

    <link rel="pingback" href="<?php bloginfo('pingback_url'); ?>"/>
    <?php if (is_singular() && get_option('thread_comments')) wp_enqueue_script('comment-reply'); ?>
    <?php wp_head(); ?>
</head>

<body>
<section id="top-header"><!--section top-->
    <div class="container">
        <div class="col-sm-9">
            <p>
                <i class="fa fa-phone"></i>
                695 081 437
            </p>
        </div>
        <div class="col-sm-3 pull-right">
            <a class="fa fa-youtube-square" href="#"></a>
            <a class="fa fa-twitter-square" href="#"></a>
            <a class="fa fa-facebook-square" href="#"></a>
        </div>
    </div>
</section>
<header id="menu" class="navbar navbar-default navbar-fixed-top" role="navigation">
    <nav class="container">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse"
                    data-target="#bs-example-navbar-collapse-1">
                <span class="sr-only"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href=".">
                <img src="<?php bloginfo('template_url'); ?>/img/logo.png"/>
                <!--                <img class="subtitle" src="img/sys/subtitle-smallest.png"/>-->
            </a>
        </div>
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul id="main-menu" class="nav navbar-nav navbar-right">
                <li class="active">
                    <a href="aktualnosci">
                        Aktualności
                    </a>
                </li>
                <li>
                    <a href="instruktorzy">
                        Instruktorzy
                    </a>
                </li>
                <li>
                    <a href="grafik">
                        Grafik
                    </a>
                </li>
                <li>
                    <a href="cennik">
                        Cennik
                    </a>
                </li>
                <li>
                    <a href="wynajem">
                        Wynajem sali
                    </a>
                </li>
                <li>
                    <a href="pokazy">
                        Pokazy tańca
                    </a>
                </li>
                <li>
                    <a href="https://www.facebook.com/setenta.taniec/photos_albums" target="_blank">
                        Galeria
                    </a>
                </li>
                <li>
                    <a href="praca">
                        Praca
                    </a>
                </li>
                <li>
                    <a href="kontakt">
                        Kontakt
                    </a>
                </li>
            </ul>

        </div>
        <?php
            $defaults = array(
                'theme_location'  => 'top-navi',
                'menu'            => '',
                'container'       => 'div',
                'container_class' => 'dupa',
                'container_id'    => 'dupa2',
                'menu_class'      => 'collapse navbar-collapse',
                'menu_id'         => 'bs-example-navbar-collapse-12',
                'echo'            => true,
                'fallback_cb'     => 'wp_page_menu',
                'before'          => '',
                'after'           => '',
                'link_before'     => '',
                'link_after'      => '',
                'items_wrap'      => '<ul id="%1$s" class="%2$s">%3$s</ul>',
                'depth'           => 0,
                'walker'          => ''
            );
            wp_nav_menu($defaults);
        ?>
    </nav>
</header>
<!--<div class="subheader jumbotron"></div>-->
<!--<div class="image-subheader">-->
<!--    <img src="--><?php //bloginfo('template_url'); ?><!--/img/dance.jpg"/>-->
<!--</div>-->

<div id="content" class="container">
    <div class="col-sm-9">
        DUPA
    </div>
    <div class="col-sm-3"></div>
</div>

<script src="<?php bloginfo('template_url'); ?>/lib/bower/jquery/dist/jquery.min.js"></script>
<script src="<?php bloginfo('template_url'); ?>/lib/bower/bootstrap/dist/js/bootstrap.min.js"></script>

<?php get_footer(); ?>
</body>
</html>