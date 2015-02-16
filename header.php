<!doctype html>
<html>
<head>
    <meta charset="<?php bloginfo('charset'); ?>"/>
    <title><?php wp_title(); ?></title>

    <link href="<?php bloginfo('template_url'); ?>/new/vendor/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet" media="screen"/>
    <link href="<?php bloginfo('template_url'); ?>/new/vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" media="screen"/>
    <link href="<?php bloginfo('template_url'); ?>/new/vendor/skippr/css/jquery.skippr.css" rel="stylesheet" media="screen"/>
    <link href="<?php bloginfo('template_url'); ?>/new/vendor/animate.css/animate.min.css" rel="stylesheet" media="screen"/>
    <link href="<?php bloginfo('template_url'); ?>/new/vendor/fullcalendar/dist/fullcalendar.min.css" rel="stylesheet" media="screen"/>
    <link href="<?php bloginfo('template_url'); ?>/new/vendor/owl.carousel/dist/assets/owl.carousel.min.css" rel="stylesheet" media="screen"/>
    <link href="<?php bloginfo('template_url'); ?>/new/vendor/owl.carousel/dist/assets/owl.theme.default.min.css" rel="stylesheet" media="screen"/>
    <link href="<?php bloginfo('template_url'); ?>/new/assets/css/style.css" rel="stylesheet" media="screen"/>

    <link rel="pingback" href="<?php bloginfo('pingback_url'); ?>"/>
    <?php if (is_singular() && get_option('thread_comments')) wp_enqueue_script('comment-reply'); ?>
    <?php wp_head(); ?>
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
                <img alt="Brand" src="<?php bloginfo('template_url'); ?>/new/assets/img/sys/logo.png">
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