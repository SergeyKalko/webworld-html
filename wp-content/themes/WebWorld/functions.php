<?php 
    add_theme_support('post-thumbnails'); // поддержка миниатюр
    register_nav_menus(array(
  'top'    => 'Верхнее меню',    //Название месторасположения меню в шаблоне
  'bottom' => 'Нижнее меню'      //Название другого месторасположения меню в шаблоне
));

    function theme_name_scripts() {
      wp_enqueue_style( 'bootstrap-style', get_template_directory_uri() . '/css/bootstrap.css' );
      wp_enqueue_style( 'main-style', get_template_directory_uri() . '/css/main.css' );
      wp_enqueue_script( 'jquery', 'https://code.jquery.com/jquery-2.2.4.min.js', array(), '1.0.0', true );
      wp_enqueue_script( 'main',  get_template_directory_uri() . '/js/main.js' , array(), '1.0.0', true );
    }
    add_action( 'wp_enqueue_scripts', 'theme_name_scripts' );
?>