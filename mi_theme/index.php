<?php get_header(); ?>

 <!-- #slider.container-fluid.mitad-pantalla -->
 <div id="slider" class="container-fluid mitad-pantalla">

   <!-- .slide.imagen.imgLiquid.imgLiquidFill -->
   <div class="slide imagen imgLiquid imgLiquidFill mitad-pantalla">
     <img src="http://fakeimg.pl/1200x500" alt="" />
   </div>

   <!-- .slide.imagen.imgLiquid.imgLiquidFill -->
   <div class="slide imagen imgLiquid imgLiquidFill mitad-pantalla">
     <img src="http://fakeimg.pl/1200x500" alt="" />
   </div>

   <!-- .slide.imagen.imgLiquid.imgLiquidFill -->
   <div class="slide imagen imgLiquid imgLiquidFill mitad-pantalla">
     <img src="http://fakeimg.pl/1200x500" alt="" />
   </div>

 </div>


   <?php




         if( have_posts() ) :
            while ( have_posts() ) :
               the_post();

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
         else :
            /* No posts found */
         endif;


         get_footer();

         ?>
