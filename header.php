<!DOCTYPE html>
<html lang="pl" xmlns="http://www.w3.org/1999/xhtml">

<head>
    <meta charset="<?php bloginfo('charset'); ?>"/>
    <title><?php wp_title(); ?></title>
    <link rel="profile" href="http://gmpg.org/xfn/11"/>

    <link href='http://fonts.googleapis.com/css?family=PT+Sans&subset=latin,latin-ext' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=PT+Sans+Narrow&subset=latin,latin-ext' rel='stylesheet'
          type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Oxygen&subset=latin,latin-ext' rel='stylesheet' type='text/css'>
    <link href="<?php bloginfo('template_url'); ?>/lib/bower/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet"
          media="screen"/>
    <link href="<?php bloginfo('template_url'); ?>/lib/bower/font-awesome/css/font-awesome.min.css" rel="stylesheet" media="screen"/>
    <link href="<?php bloginfo('template_url'); ?>/lib/bower/animate.css/animate.min.css" rel="stylesheet" media="screen"/>
    <link href="<?php bloginfo('template_url'); ?>/lib/bower/hover/css/hover-min.css" rel="stylesheet" media="screen"/>
    <link rel="stylesheet" href="<?php echo get_stylesheet_uri(); ?>" type="text/css" media="screen"/>

    <link rel="pingback" href="<?php bloginfo('pingback_url'); ?>"/>
    <?php if (is_singular() && get_option('thread_comments')) wp_enqueue_script('comment-reply'); ?>
    <?php wp_head(); ?>
</head>

<body>
<section id="top-header">
    <div class="container">
        <div class="col-sm-9 col-xs-6">
            <p>
                <i class="fa fa-phone"></i>
                695 081 437
            </p>
        </div>
        <div class="col-sm-3 col-xs-6 pull-right icon-toolbar">
            <div class="animated fadeInDown animation-delay-1">
                <a class="" href="https://www.facebook.com/setenta.taniec"
                   target="_blank">
                    <img src="<?php bloginfo('template_url'); ?>/img/youtube.png"/>
                </a>
            </div>
            <div class="animated fadeInDown animation-delay-2">
                <a title="Nasz profil w Google+!" data-placement="left"
                   href="https://www.google.com/+Szko%C5%82aTa%C5%84caSetentaWroc%C5%82aw" target="_blank">
                    <img src="<?php bloginfo('template_url'); ?>/img/twitter.png"/>
                </a>
            </div>

            <div class="animated fadeInDown animation-delay-3">
                <a title="Nasz profil na Twitterze!" data-placement="left" href="https://twitter.com/SetentaTaniec"
                   target="_blank">
                    <img src="<?php bloginfo('template_url'); ?>/img/gplus.png"/>
                </a>
            </div>

            <div class="animated fadeInDown animation-delay-4">
                <a title="Subskrybuj nasz kanał na Youtube!" data-placement="left"
                   href="http://www.youtube.com/channel/UCKV_dE-yr7d7k1SeBW_-ikg" target="_blank">
                    <img src="<?php bloginfo('template_url'); ?>/img/facebook.png"/>
                </a>
            </div>
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
            <a class="navbar-brand animated tada" href=".">
                <img src="<?php bloginfo('template_url'); ?>/img/logo2.png"/>
            </a>
        </div>
        <?php
        $defaults = array(
            'menu' => 'main-menu',
            'container' => 'div',
            'container_class' => 'collapse navbar-collapse',
            'container_id' => 'bs-example-navbar-collapse-1',
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