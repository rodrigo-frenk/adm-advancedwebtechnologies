<?php get_header(); ?>

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



<!-- section#slider.container-fluid.mitad-pantalla -->
<section id="slider" class="container-fluid mitad-pantalla">



   <?php
   // Crear un Loop Personalizado (Custom Loop)

   $categoria_a_mostrar = get_term_by( "name", "Slider Inicio", "category" );


   $arguments = array(
      'post_type' => 'post',
      'cat' => $categoria_a_mostrar -> term_id
   );

   $query = new WP_Query( $arguments );

   if( $query -> have_posts() ) :
      while ( $query -> have_posts() ) :
         $query -> the_post();

         ?>

         <!-- .slide.imagen.imgLiquid.imgLiquidFill -->
         <div class="slide imagen imgLiquid imgLiquidFill mitad-pantalla">
            <?php echo get_the_post_thumbnail(); ?>
         </div>

         <?php
      endwhile;
   endif;
   ?>

</section>


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


<?php get_footer(); ?>
