<?php

class Persona {

   // propiedades:
   var $nombres, $apellidos, $edad, $ocupacion;

   function __construct() {

   }


   // métodos "get" y "set" para cada una de las propiedades

   function getNombres() {
      return $this -> nombres;
   }

   function setNombres( $argumento ) {
      $this -> nombres = $argumento;
   }


   function getApellidos() {
      return $this -> apellidos;
   }

   function setApellidos( $argumento ) {
      $this -> apellidos = $argumento;
   }


   function getEdad() {
      return $this -> edad;
   }

   function setEdad( $argumento ) {
      $this -> edad = $argumento;
   }


   function getOcupacion() {
      return $this -> ocupacion;
   }

   function setOcupacion( $argumento ) {
      $this -> ocupacion = $argumento;
   }

}




class Grupo {

   var $personas;
   var $nombre;

   function __construct() {
      $this -> personas = array();
   }


   function getNombre() {
      return $this->nombre;
   }

   function setNombre( $argumento ) {
      $this->nombre = $argumento;
   }


   function getPersonas() {
      return $this -> personas;
   }

   function annadirPersona( $persona ) {
      array_push( $this -> personas, $persona );
   }


   function mostrarGrupo() {

      echo '<h2>'. $this -> nombre .'</h2>';


      foreach ( $this -> personas as $persona ) {

         $html = "";

         $html .= $persona->getApellidos();
         $html .= ", ";
         $html .= $persona->getNombres();

         $html .= ". ";

         $html .= $persona->getEdad();
         $html .= " años. ";

         $html .= $persona->getOcupacion();
         $html .= ".";
         $html .= "<br />";

         echo $html;

      }


   }

}





$grupoA = new Grupo();
$grupoA -> setNombre( "Grupo A" );

$grupoB = new Grupo();
$grupoB -> setNombre( "Grupo B" );

$grupoC = new Grupo();
$grupoC -> setNombre( "Otro Grupo Distinto" );




$una_persona = new Persona();

$una_persona -> setNombres( "Manuel" );
$una_persona -> setApellidos( "Alcaraz Jiménez" );
$una_persona -> setEdad( 27 );
$una_persona -> setOcupacion( "Ingeniero" );


$grupoA -> annadirPersona( $una_persona );



$una_persona = new Persona();

$una_persona -> setNombres( "Juan Alberto" );
$una_persona -> setApellidos( "Pérez Torres" );
$una_persona -> setEdad( 25 );
$una_persona -> setOcupacion( "Estudiante" );


$grupoA -> annadirPersona( $una_persona );
$grupoB -> annadirPersona( $una_persona );




$una_persona = new Persona();

$una_persona -> setNombres( "Ximena" );
$una_persona -> setApellidos( "Rodríguez García" );
$una_persona -> setEdad( 26 );
$una_persona -> setOcupacion( "Docente" );


$grupoB -> annadirPersona( $una_persona );
$grupoC -> annadirPersona( $una_persona );




$grupoA -> mostrarGrupo();

$grupoB -> mostrarGrupo();

$grupoC -> mostrarGrupo();


?>
