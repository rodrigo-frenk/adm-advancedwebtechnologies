<?php

$numero1 = $_POST['numero1'];

$numero2 = $_POST['numero2'];

$operacion = $_POST['operacion'];


if( $operacion == "sumar" ) {
   sumar( $numero1, $numero2 );
}
if( $operacion == "restar" ) {
   restar( $numero1, $numero2 );
}
if( $operacion == "multiplicar" ) {
   multiplicar( $numero1, $numero2 );
}
if( $operacion == "dividir" ) {
   dividir( $numero1, $numero2 );
}




function sumar( $a, $b ) {
   $resultado = $a + $b;
   echo "La suma de " . $a . " y " . $b . " es: " . $resultado;
}

function restar( $a, $b ) {
   $resultado = $a - $b;
   echo "La resta de " . $a . " y " . $b . " es: " . $resultado;
}

function multiplicar( $a, $b ) {
   $resultado = $a * $b;
   echo "La multiplicación de " . $a . " y " . $b . " es: " . $resultado;
}

function dividir( $a, $b ) {
   $resultado = $a / $b;
   echo "La división de " . $a . " y " . $b . " es: " . $resultado;
}



?>
