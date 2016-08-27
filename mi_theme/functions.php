<?php


// añadir soporte para Imagen Destacada
add_theme_support('post-thumbnails');


// añadir menú
function register_menus() {

   register_nav_menus(
      array(
         'menu-principal' => __( 'Menú Principal' ),
         'menu-secundario' => __( 'Menú Secundario' )
      )
   );

}
add_action( 'init', 'register_menus' );





function cargar_recursos() {

   $themeDir = get_stylesheet_directory_uri();

   wp_enqueue_style( 'bootstrap', $themeDir . '/recursos/bootstrap-3.3.7-dist/css/bootstrap.min.css' );
   wp_enqueue_style( 'bootstrap-theme', $themeDir . '/recursos/bootstrap-3.3.7-dist/css/bootstrap-theme.min.css' );

   wp_enqueue_style( 'slick', $themeDir . '/recursos/slick-1.6.0/slick/slick.css' );
   wp_enqueue_style( 'slick-theme', $themeDir . '/recursos/slick-1.6.0/slick/slick-theme.css' );



   wp_enqueue_script( 'jquery', $themeDir . '/recursos/jquery/jquery-3.1.0.min.js' );

   wp_enqueue_script( 'bootstrap', $themeDir . '/recursos/bootstrap-3.3.7-dist/js/bootstrap.min.js' );

   wp_enqueue_script( 'imgLiquid', $themeDir . '/recursos/imgLiquid-master/js/imgLiquid-min.js' );

   wp_enqueue_script( 'slick', $themeDir . '/recursos/slick-1.6.0/slick/slick.min.js' );



   wp_enqueue_style( 'mi-theme-css', $themeDir . '/estilos/mi-theme.css' );

   // añadir mi propio script, aclarando que tiene a jQuery como dependencia
   wp_enqueue_script( 'mi-theme-js', $themeDir . '/js/mi-theme.js', array('jquery') );

}

add_action( 'wp_enqueue_scripts', 'cargar_recursos' );



?>
