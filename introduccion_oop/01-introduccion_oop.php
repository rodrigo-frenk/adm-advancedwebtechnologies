<?php

// Programación Orientada a Objetos
// (Object oriented programming)



class MiPrimerObjeto {

   var $propiedad;


   function __construct() {
      $this -> init();
   }


   function init() {
      $this->propiedad = "lo que sea";
   }


   // get
   function obtenerPropiedad() {
      return $this->propiedad;
   }

   // set
   function establecerPropiedad( $nuevoValor ) {
      $this->propiedad = $nuevoValor;
   }


}

?>


<h1>Mi Primer Objeto</h1>


<?php

   $objeto1 = new MiPrimerObjeto();

   $objeto1 -> establecerPropiedad( "un nuevo valor" );

   echo "El objeto 1 tiene asignado: ";
   echo $objeto1 -> obtenerPropiedad();

   echo '<br />';


   $objeto2 = new MiPrimerObjeto();

   $objeto2 -> establecerPropiedad( "un valor distinto" );

   echo "El objeto 2 tiene asignado: ";
   echo $objeto2 -> obtenerPropiedad();

   echo '<br />';

?>
