<!doctype html>
<html>
<head>
    <meta charset="<?php bloginfo('charset'); ?>"/>
    <title><?php wp_title(); ?></title>

    <link rel="pingback" href="<?php bloginfo('pingback_url'); ?>"/>
    <?php if (is_singular() && get_option('thread_comments')) wp_enqueue_script('comment-reply'); ?>
    <?php wp_head(); ?>
    <link href="<?php bloginfo('template_url'); ?>/vendor/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet" media="screen"/>
    <link href="<?php bloginfo('template_url'); ?>/vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" media="screen"/>
    <link href="<?php bloginfo('template_url'); ?>/vendor/skippr/css/jquery.skippr.css" rel="stylesheet" media="screen"/>
    <link href="<?php bloginfo('template_url'); ?>/vendor/animate.css/animate.min.css" rel="stylesheet" media="screen"/>
    <link href="<?php bloginfo('template_url'); ?>/vendor/fullcalendar/dist/fullcalendar.min.css" rel="stylesheet" media="screen"/>
    <link href="<?php bloginfo('template_url'); ?>/vendor/owl.carousel/dist/assets/owl.carousel.min.css" rel="stylesheet" media="screen"/>
    <link href="<?php bloginfo('template_url'); ?>/vendor/owl.carousel/dist/assets/owl.theme.default.min.css" rel="stylesheet" media="screen"/>
    <link href="<?php bloginfo('template_url'); ?>/assets/css/style.css" rel="stylesheet" media="screen"/>
</head>
<body>
<nav class="navbar navbar-default">
    <div class="container">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-collapse">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="/">
                <img alt="nauka tańca wrocław" src="<?php bloginfo('template_url'); ?>/assets/img/sys/logo.png">
            </a>
        </div>
        <?php
        $defaults = array(
            'menu' => 'main-menu',
            'container' => 'div',
            'container_class' => 'collapse navbar-collapse',
            'container_id' => 'navbar-collapse',
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
    </div>
</nav>