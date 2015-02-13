<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="<?php bloginfo('charset'); ?>"/>
    <title><?php wp_title(); ?></title>
    <link href="<?php bloginfo('template_url'); ?>/lib/vendor/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet" media="screen"/>
    <link href="<?php bloginfo('template_url'); ?>/lib/vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" media="screen"/>
    <link href="<?php bloginfo('template_url'); ?>/lib/vendor/animate.css/animate.min.css" rel="stylesheet" media="screen"/>
    <link href="<?php bloginfo('template_url'); ?>/lib/vendor/fullcalendar/dist/fullcalendar.min.css" rel="stylesheet" media="screen"/>

    <link href="<?php bloginfo('template_url'); ?>/assets/css/fonts.css" rel="stylesheet" media="screen"/>
    <link rel="stylesheet" href="<?php echo get_stylesheet_uri(); ?>" type="text/css" media="screen"/>

    <link rel="pingback" href="<?php bloginfo('pingback_url'); ?>"/>
    <?php if (is_singular() && get_option('thread_comments')) wp_enqueue_script('comment-reply'); ?>
    <?php wp_head(); ?>

    <script src="<?php bloginfo('template_url'); ?>/lib/vendor/jquery/dist/jquery.min.js"></script>
    <script src="<?php bloginfo('template_url'); ?>/lib/vendor/bootstrap/dist/js/bootstrap.min.js"></script>
    <script src="<?php bloginfo('template_url'); ?>/lib/vendor/angularjs/angular.min.js" type="text/javascript"></script>
    <script src="<?php bloginfo('template_url'); ?>/lib/vendor/angular-resource/angular-resource.min.js" type="text/javascript"></script>
    <script src="<?php bloginfo('template_url'); ?>/lib/vendor/angular-ui-bootstrap/ui-bootstrap-tpls.js" type="text/javascript"></script>
    <script src="<?php bloginfo('template_url'); ?>/lib/vendor/angular-translate/angular-translate.min.js" type="text/javascript"></script>
    <script src="<?php bloginfo('template_url'); ?>/lib/vendor/moment/moment.js" type="text/javascript"></script>
    <script src="<?php bloginfo('template_url'); ?>/lib/vendor/fullcalendar/dist/fullcalendar.js" type="text/javascript"></script>
    <script src="<?php bloginfo('template_url'); ?>/lib/vendor/fullcalendar/dist/lang-all.js" type="text/javascript"></script>
</head>

<body>
<section id="top-header">
    <div class="container">
        <div class="col-sm-8 col-xs-5">
            <p>
                <i class="fa fa-phone"></i>
                695 081 437 </p>
        </div>
        <div class="col-sm-4 col-xs-7 pull-right social">
            <div class="animated fadeInDown">
                <div class="animated fadeInDown animation-delay-1">
                    <a title="Subskrybuj nasz kanał na Youtube!" data-placement="left"
                       href="http://www.youtube.com/channel/UCKV_dE-yr7d7k1SeBW_-ikg" target="_blank">
                        <img src="<?php bloginfo('template_url'); ?>/assets/img/you.png"/>
                    </a>
                </div>
                <div class="animated fadeInDown animation-delay-2">
                    <a title="Nasz profil na Twitterze!" data-placement="left" href="https://twitter.com/SetentaTaniec"
                       target="_blank">
                        <img src="<?php bloginfo('template_url'); ?>/assets/img/twi.png"/>
                    </a>
                </div>

                <div class="animated fadeInDown animation-delay-3">
                    <a title="Nasz profil w Google+!" data-placement="left"
                       href="https://www.google.com/+Szko%C5%82aTa%C5%84caSetentaWroc%C5%82aw" target="_blank">
                        <img src="<?php bloginfo('template_url'); ?>/assets/img/gpl.png"/>
                    </a>
                </div>

                <div class="animated fadeInDown animation-delay-4">
                    <a class="" href="https://www.facebook.com/setenta.taniec" target="_blank">
                        <img src="<?php bloginfo('template_url'); ?>/assets/img/fac.png"/>
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>
<header id="menu" class="navbar navbar-default navbar-fixed-top" role="navigation">
    <nav class="container">
        <div class="navbar-header">
            <button type="button" id="nav-toggle-button" class="navbar-toggle" data-toggle="collapse"
                    data-target="#navbar-collapsible">
                <span class="sr-only"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href=".">
                <img src="<?php bloginfo('template_url'); ?>/assets/img/logo2.png"/>
            </a>
        </div>
        <?php
        $defaults = array(
            'menu' => 'main-menu',
            'container' => 'div',
            'container_class' => 'collapse navbar-collapse',
            'container_id' => 'navbar-collapsible',
            'menu_class' => 'nav navbar-nav navbar-right',
            'menu_id' => 'main-menu',
            'echo' => true,
            'fallback_cb' => 'wp_page_menu',
            'before' => '',
            'after' => '',
            'link_before' => '',
            'link_after' => '',
            'items_wrap' => '<ul id="%1$s" class="%2$s">%3$s</ul>',
            'depth' => 0,
            'walker' => ''
        );
        wp_nav_menu($defaults);
        ?>
    </nav>
</header>