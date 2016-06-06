<!DOCTYPE html>
<?php wp_head(); ?>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title><?php bloginfo (); ?></title>
  <script src="https://code.jquery.com/jquery.js"></script>
  <script src="http://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js"></script>
  <!-- <script src="<?php //bloginfo (template_url); ?>/css/bootstrap.js"></script> -->
  <script src="<?php bloginfo (template_url); ?>/css/bootstrap.min.js"></script>
  <link href="<?php bloginfo (template_url); ?>/css/bootstrap.js" rel="stylesheet">
  <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,300,300italic,400italic,700,700italic' rel='stylesheet' type='text/css'>
  <link href='https://fonts.googleapis.com/css?family=PT+Sans' rel='stylesheet' type='text/css'>

</head>
<body>
  <div class="header-wrap">
    <div class="header">
      <div class="container">
        <div class="row logo-wrap">
          <div  class="col-md-8 col-sm-6 col-xs-12 logo"><a href="/"><img title="logo" src="<?php bloginfo (template_url); ?>/img/logo.png" alt="logo)"></a></div>
          <div  class="col-md-4 col-sm-6 col-xs-12 social">
            <a href="#" class="wi-fi"><img title="wi-fi" src="<?php bloginfo (template_url); ?>/img/wi-fi.png" alt="wi-fi)"></a>
            <a href="#" class="facebook"><img title="facebook" src="<?php bloginfo (template_url); ?>/img/facebook.png" alt="facebook)"></a>
            <a href="#" class="twitter"><img title="twitter" src="<?php bloginfo (template_url); ?>/img/twitter.png" alt="twitter)"></a>
            <a href="#" class="in"><img title="in" src="<?php bloginfo (template_url); ?>/img/in.png" alt="in)"></a>
          </div>
        </div>
      </div>
    </div>
    <div class="menu-header-wrap">
      <div class='hidden-xs hidden-sm'>
        <div class="header-border">
        <div class="container">
          <div class="row main-menu-wrap">
            <div  class="col-md-8 menu-header">
              <?php 
                wp_nav_menu( array(
                  'menu_class'=>'menu-top',
                  'theme_location'=>'top',
                  'fallback_cb' => '',  //Выводить меню, только если оно существует
                  //'after'=>' '
                ) );
              ?>
            </div>
            <div  class="col-md-4 search-wrap">
              <p class="search"><input type="text" name="search" placeholder="Search Something"></p>
            </div>
          </div>
        </div>
        </div>
      </div>
      <div class="hidden-lg hidden-md">
        <nav class="navbar navbar-default navbar-fixed navbar-wrap" role="navigation">
          <div class="container-fluid">
            <div class="navbar-header">
              <button type="button" class="navbar-toggle button-menu" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
              </button>
            </div>
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
              <?php 
                wp_nav_menu( array(
                  'menu_class'=>'menu-top',
                  'theme_location'=>'top',
                  'fallback_cb' => '',  //Выводить меню, только если оно существует
                  //'after'=>' '
                ) );
              ?>
              <form class="navbar-form navbar-left nav-search" role="search">
                <div class="form-group">
                <input type="text" class="form-control" placeholder="Search Something">
                </div>
              </form>
            </div>
          </div>
        </nav>
      </div>
    </div>
  </div>