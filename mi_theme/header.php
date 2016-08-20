<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>
    <?php echo bloginfo('name'); ?>
  </title>


  <!-- cargaremos los recursos en functions.php:
  <link rel="stylesheet" href="...">
  por ejemplo:
  <link rel="stylesheet" href="recursos/bootstrap-3.3.7-dist/css/bootstrap.min.css">
  -->

  <?php wp_head(); ?>

</head>
<body>

  <header id="cabecera" class="container-fluid">

    <h1>
      <?php echo bloginfo('name'); ?>
    </h1>

    <h2>
      <?php echo bloginfo('description'); ?>
    </h2>

    <!-- nav#menu_principal -->
    <nav id="menu_principal">

      <?php
      /*
      $paginas = get_pages();

      foreach( $paginas as $pagina ) :

      ?>

      <li>
        <a href="<?php echo get_the_permalink( $pagina -> ID ); ?>">
          <?php echo $pagina -> post_title; ?>
        </a>
      </li>

      <?php

      endforeach;
      */
      ?>

      <?php wp_nav_menu( array( 'theme_location' => 'menu-principal' ) ); ?>


  </nav>

</header>



<!-- main#principal -->
<main id="principal" class="container">
