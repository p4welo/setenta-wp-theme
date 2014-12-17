<!DOCTYPE html>
<html lang="pl" xmlns="http://www.w3.org/1999/xhtml">

<head>
    <meta charset="<?php bloginfo('charset'); ?>"/>
    <title><?php bloginfo('name'); ?> <?php wp_title(); ?></title>
<!--    <link rel="profile" href="http://gmpg.org/xfn/11"/>-->

    <link href="<?php bloginfo('template_url'); ?>/lib/bower/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet"
          media="screen"/>
    <link href="<?php bloginfo('template_url'); ?>/lib/bower/font-awesome/css/font-awesome.min.css" rel="stylesheet"
          media="screen"/>
    <link href="<?php bloginfo('template_url'); ?>/lib/bower/animate.css/animate.min.css" rel="stylesheet"
          media="screen"/>
    <link href="<?php bloginfo('template_url'); ?>/assets/css/fonts.css" rel="stylesheet" media="screen"/>
    <link rel="stylesheet" href="<?php echo get_stylesheet_uri(); ?>" type="text/css" media="screen"/>

    <link rel="pingback" href="<?php bloginfo('pingback_url'); ?>"/>
    <?php if (is_singular() && get_option('thread_comments')) wp_enqueue_script('comment-reply'); ?>
    <?php wp_head(); ?>
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
                <a class="" href="https://www.facebook.com/setenta.taniec" target="_blank">
                    <img src="<?php bloginfo('template_url'); ?>/assets/img/fac.png"/>
                </a>
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