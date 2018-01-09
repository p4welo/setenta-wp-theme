<!doctype html>
<html>
<head>
  <meta charset="<?php bloginfo('charset'); ?>"/>
  <meta http-equiv="X-UA-Compatible" content="IE=11" />
  <meta name="viewport" content="width=device-width, initial-scale=1"/>
  <meta name="google-site-verification" content="MPLJsxzNFg28xjkRSp4rfxuRRg2DyruYt-XtjYJSGco" />
  <title><?php wp_title('|', true, 'right'); ?></title>

  <link rel="pingback" href="<?php bloginfo('pingback_url'); ?>"/>
  <?php if (is_singular() && get_option('thread_comments')) wp_enqueue_script('comment-reply'); ?>
  <?php wp_head(); ?>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css"/>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://unpkg.com/owl.carousel@2.2.0/dist/assets/owl.carousel.min.css">
  <link rel="stylesheet" href="https://unpkg.com/owl.carousel@2.2.0/dist/assets/owl.theme.default.min.css">
  <link rel="stylesheet" href="https://unpkg.com/animate.css@3.5.2/animate.min.css">
  <link rel="stylesheet" href="https://unpkg.com/cookieconsent@3.0.4/build/cookieconsent.min.css">
  <link rel="stylesheet" href="https://unpkg.com/notyf@2.0.1/dist/notyf.min.css">
  <link href="<?php bloginfo('template_url'); ?>/style.css?@@version" rel="stylesheet" media="all"/>

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <script src="https://unpkg.com/headroom.js@0.9.3/dist/headroom.min.js"></script>
  <script src="https://unpkg.com/owl.carousel@2.2.0/dist/owl.carousel.min.js"></script>
<!--  <script src="https://connect.facebook.net/en_US/sdk.js"></script>-->
  <script src="https://unpkg.com/cookieconsent@3.0.4"></script>
  <script src="<?php bloginfo('template_url'); ?>/vendor.js"></script>

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
          <button type="button" class="navbar-toggle" data-toggle="collapse"
                  data-target="#bs-example-navbar-collapse-1">
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
        wp_nav_menu(array(
            'menu' => 'main-menu',
            'theme_location' => 'main-menu',
            'depth' => 2,
            'container' => 'div',
            'container_class' => 'collapse navbar-collapse',
            'container_id' => 'bs-example-navbar-collapse-1',
            'menu_class' => 'nav navbar-nav navbar-right',
            'fallback_cb' => 'WP_Bootstrap_Navwalker::fallback',
            'walker' => new WP_Bootstrap_Navwalker())
        );
        ?>
      </div>
    </nav>
  </div>