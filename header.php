<!doctype html>
<html>
<head>
    <meta charset="<?php bloginfo('charset'); ?>"/>
    <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
    <meta name="viewport" content="width=device-width, initial-scale=1"/>
    <title><?php wp_title('|', true, 'right'); ?></title>

    <link rel="pingback" href="<?php bloginfo('pingback_url'); ?>"/>
    <?php if (is_singular() && get_option('thread_comments')) wp_enqueue_script('comment-reply'); ?>
    <?php wp_head(); ?>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css"/>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://unpkg.com/owl.carousel@2.2.0/dist/assets/owl.carousel.min.css">
    <link rel="stylesheet" href="https://unpkg.com/owl.carousel@2.2.0/dist/assets/owl.theme.default.min.css">
    <link href="<?php bloginfo('template_url'); ?>/style.css?@@version" rel="stylesheet" media="all"/>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <script src="https://unpkg.com/angular@1.5.9/angular.min.js"></script>
    <script src="https://unpkg.com/angular-sanitize@1.5.9/angular-sanitize.min.js"></script>
    <script src="https://unpkg.com/angular-animate@1.5.9/angular-animate.min.js"></script>
    <script src="https://unpkg.com/angular-touch@1.5.9/angular-touch.min.js"></script>
    <script src="https://unpkg.com/angular-translate@2.13.1/dist/angular-translate.min.js"></script>
    <script src="https://unpkg.com/angular-ui-bootstrap@2.5.0/dist/ui-bootstrap-tpls.js"></script>
    <script src="https://unpkg.com/owl.carousel@2.2.0/dist/owl.carousel.min.js"></script>
    <script src="https://unpkg.com/lodash@4.17.4"></script>
    <script src="<?php bloginfo('template_url'); ?>/assets/js/vendor.js"></script>

    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<body>
<div class="main-content visible">
    <div class="navbar-section">
        <nav class="navbar navbar-default navbar-fixed-top">
            <div class="container">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse"
                            data-target="#navbar-collapse">
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
    </div>