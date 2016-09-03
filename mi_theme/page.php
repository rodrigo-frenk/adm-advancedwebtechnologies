<?php
get_header();

if( have_posts() ) :
   while ( have_posts() ) :
      the_post();

      ?>

      <!-- article#articulo_x.articulo -->
      <article id="articulo_<?php echo get_the_ID(); ?>" class="entrada_home">

            <header>

               <h1>
                  <?php echo get_the_title(); ?>
               </h1>

               <section class="fecha">
                  <?php echo get_the_date( 'd \d\e F, Y', get_the_ID() ); ?>
               </section>

            </header>

            <section class="imagen mitad-pantalla imgLiquid imgLiquidFill">
               <?php echo get_the_post_thumbnail(); ?>
            </section>

            <!-- section.extracto -->
            <section class="contenido">
               <?php echo get_the_content(); ?>
            </section>

      </article>

      <?php

   endwhile;
else :
   /* No posts found */
endif;


get_footer();

?>
