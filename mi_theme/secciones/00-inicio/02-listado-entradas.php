
<!-- section#inicio-entradas.container-fluid -->
<section id="inicio-entradas" class="container-fluid">

   <?php

   $arguments = array(
      'post_type' => 'post',
      'posts_per_page' => -1
   );

   $query = new WP_Query( $arguments );

   if( $query -> have_posts() ) :
      while ( $query -> have_posts() ) :
         $query -> the_post();

         ?>

         <!-- article#articulo_x.articulo -->
         <article id="articulo_<?php echo get_the_ID(); ?>" class="entrada_home col-sm-6 col-md-4">

            <a href="<?php echo get_the_permalink( get_the_ID() ); ?>">

               <header>

                  <h3>
                     <?php echo get_the_title(); ?>
                  </h3>

                  <section class="fecha">
                     <?php echo get_the_date( 'd \d\e F, Y', get_the_ID() ); ?>
                  </section>

               </header>

               <section class="imagen imgLiquid imgLiquidFill tercio-pantalla">
                  <?php echo get_the_post_thumbnail(); ?>
               </section>

               <!-- section.extracto -->
               <section class="extracto">
                  <?php echo get_the_excerpt(); ?>
               </section>

            </a>

         </article>

         <?php

      endwhile;

   endif;



   ?>

</section>
