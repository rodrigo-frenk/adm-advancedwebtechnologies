<?php

/*

Ejemplo de la aplicación de un Bucle o Loop
para generar dinámicamente una plantilla de Blog
*/



for( $i = 0;  $i < 10; $i++ ) {
   // while ( $i < 10 ) {

   $titulo = "Titulo de la Entrada " . ($i+1);
   ?>

   <div class="" style="margin:60px">

      <h3>
         <?php echo $titulo; ?>
      </h3>

      <small>
         17 de agosto, 2016
      </small>

      <div>
         <img src="http://fakeimg.pl/300x200" alt="" />
      </div>

      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Vero fugiat unde incidunt quos, nemo ullam ipsum ipsa.</p>

   </div>

   <?php

   // // se usa solo en el while:
   // $i++;

}


?>
