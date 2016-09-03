<!-- section#titulo-pagina.container -->
<section id="titulo-pagina" class="container">
   <?php

   // en el caso de las páginas estáticas, el loop nos trae
   // el contenido de la página, no todos los posts

   if( have_posts() ) :
      while ( have_posts() ) :
         the_post();

         ?>
         <h1>
            <?php echo get_the_title(); ?>
         </h1>

         <!-- section.imagen.mitad-pantalla.imgLiquid.imgLiquidFill -->
         <section class="imagen mitad-pantalla imgLiquid imgLiquidFill">

            <?php echo get_the_post_thumbnail(); ?>

         </section>

         <?php
      endwhile;
   endif;
   ?>
</section>
