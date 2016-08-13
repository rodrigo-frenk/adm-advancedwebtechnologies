<h1>Estructuras de control</h1>

<?php

/*
Las estructuras de control nos permiten manipular
el flujo de un programa
*/

/*
if( condicion_se_cumple ) {

  hacer_algo

} else {

  hacer otra cosa

}
*/

$edad = 17;

if( $edad >= 18 ) {

  echo 'Puedes sacar tu licencia.';

} elseif( $edad >= 16 ) {

  echo 'Puedes sacar un permiso temporal.';

} else {

  echo 'No puedes manejar.';

}



/*

operadores de comparación:

las condiciones siempre arrojan 'true' o 'false' (valores boolean)

p.ej. (3>1 es 'true', 1==0 es 'false')



>     Mayor que
<     Menor que
>=    Mayor o igual que
<=    Menor o igual que
==    Igual que
!=    Diferente que
===   Idéntico
!     Negacion

*/



// multiples condiciones
// operadores lógicos

// &&    operador AND


$es_viernes = true;
$tenemos_varo = false;

if( $es_viernes == true && $tenemos_varo == true ) {

  echo "vamos de fiesta!";

}

?>

<br>

<?php

// ||    operador OR

$queremos_pasear = true;
$necesitamos_comprar_cosas = true;


if( $queremos_pasear || $necesitamos_comprar_cosas ) {

  echo "Vamos al centro";

}



// negacion:

$vimos_la_de_cazafantasmas = false;

if( ! $vimos_la_de_cazafantasmas ) {

  if( $tenemos_varo ) {
    echo 'vamos al cine';
  }
  else {
    echo 'bajala en torrent';
  }

}


// notacion alternativa

if( $es_viernes ) :

  echo 'relajarse';

endif;


?>


<h2>Switch</h2>

<p>
   Un switch nos permite realizar diferentes instrucciones dependiendo de un valor
</p>


<?php

// semáforo

$color = "amarillo";

echo "Color: " . $color . '<br>';

switch( $color ) {

   case "rojo" :

      echo "alto total";
      break;

   case "amarillo" :

      echo "detener el auto";
      break;

   case "verde" :

      echo "acelerar";
      break;

   default:

      echo "ese no es un color de semaforo";


}



?>
