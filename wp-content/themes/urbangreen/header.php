<!doctype html>
<html class="no-js" lang="en">
  <head>
    <meta charset="utf-8" />
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php wp_title(''); ?></title>

    <!-- <link rel="icon" href="assets/img/favicon.ico?v=3" type="image/x-icon" /> -->

    <!-- Typekit -->
    <script src="https://use.typekit.net/tik8eem.js"></script>
    <script>try{Typekit.load({ async: true });}catch(e){}</script>

    <!-- <link rel="stylesheet" href="//basehold.it/30"> -->

    <?php wp_head(); ?>
  </head>
  <body>

  <!-- PRELOADER -->
  <div id="st-preloader">
    <div id="pre-status">
      <div class="preload-placeholder"></div>
    </div>
  </div>
  <!-- /PRELOADER -->


  <!-- HEADER -->
  <header id="header">
    <nav class="navbar st-navbar navbar-fixed-top">
      <div class="container">
        <div class="navbar-header">

          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#st-navbar-collapse">
            <span class="sr-only">Toggle navigation</span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
          </button>

          <div class="logo">
            <a href="<?php echo get_home_url(); ?>">
              <div class="logo1">
                <span>Tom Kinsey</span>
              </div>
              <div class="logo2">
                <span>Fencing & Landscaping</span>
              </div>
            </a>
          </div>

        </div>

        <div class="collapse navbar-collapse" id="st-navbar-collapse">
          <!-- OFF CANVAS MENU -->
          <?php
            wp_nav_menu( array(
              'theme_location' => 'primary-menu',
              'container' => 'ul',
              'menu_class'=> 'nav navbar-nav navbar-right'
              ));
          ?>
        </div><!-- /.navbar-collapse -->
      </div><!-- /.container -->
    </nav>
  </header>
  <!-- /HEADER -->
