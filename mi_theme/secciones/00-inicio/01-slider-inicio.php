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
