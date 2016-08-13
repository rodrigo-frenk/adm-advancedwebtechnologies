<!DOCTYPE html>
<html>
   <head>
      <meta charset="utf-8">
      <title>
         <?php echo bloginfo('name'); ?>
      </title>

      <?php wp_head(); ?>

   </head>
   <body>

      <header id="cabecera">

         <h1>
            <?php echo bloginfo('name'); ?>
         </h1>

         <h2>
            <?php echo bloginfo('description'); ?>
         </h2>

         <!-- nav#menu_principal -->
         <nav id="menu_principal">

            <?php

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

            ?>


         </nav>

      </header>



      <!-- main#principal -->
      <main id="principal">
