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
         <div class="slide mitad-pantalla rel">

            <div class="imagen abs z0 w100 h100 imgLiquid imgLiquidFill">
               <?php echo get_the_post_thumbnail(); ?>
            </div>

            <!-- .cortina.cortina-negra.z0.abs.w100.h100 -->
            <div class="cortina cortina-negra z0 abs w100 h100"></div>

            <div class="texto abs z1 texto-flotante">
               <h2>
                  <?php echo get_the_title(); ?>
               </h2>
            </div>

         </div>




         <?php
      endwhile;
   endif;
   ?>

</section>
