<h1>Arreglos o <i>Arrays</i></h1>

<?php

/*

Un arreglo es un conjunto de datos que están almacenados secuencialmente

*/

$frutas = array(
  'Manzana',
  'Naranja',
  'Uva',
  'Fresa',
  'Sandía'
);


echo 'La primera fruta es: ' . $frutas[ 0 ];
echo '<br>';
echo 'La cuarta fruta es: ' . $frutas[ 3 ];


?>

<br>

<?php

/*

Ejercicio:

Generar una lista de las frutas existentes.

"En esta tienda también se vende 'nombredefruta'"

*/


$frutas = array(
  'Manzana',
  'Naranja',
  'Uva',
  'Fresa',
  'Sandía',
  'Kiwi',
  'Guanábana'
);

/*

$numero_de_frutas = count( $frutas );


for ($i=0; $i < $numero_de_frutas; $i++) {
  // recuperar nombre de fruta utilizando el índice del arreglo:

  echo '<li>'. 'En esta tienda también se vende ' . $frutas[ $i ] . '</li>';
}

*/

// ciclo foreach: itera por cada elemento
foreach ( $frutas as $una_fruta ) {

  echo '<li>'. 'En esta tienda también se vende ' . $una_fruta . '</li>';

}


?>

<br>

<?php

/*

Arreglos Asociativos

Aquí, los datos son almacenados utilizando índices no numéricos
*/


?>

<br>

<?php

/* Iterando por arrays asociativos */

$entidades_sureste = array(
  'Campeche'      => 'Campeche',
  'Quintana Roo'  => 'Chetumal',
  'Yucatán'       => 'Mérida',
  'Chiapas'       => 'Tuxtla Gutiérrez',
  'Oaxaca'        => 'Oaxaca',
  'Tabasco'       => 'Villahermosa'
);
?>

<ul>

  <?php
  foreach ($entidades_sureste as $nombre_estado => $ciudad_capital ) {
    echo '<li>La capital de ' . $nombre_estado . ' es ' . $ciudad_capital . '</li>';
  }
  ?>

</ul>


<br>



<?php

// Array asociativo para almacenar muchos datos de modo ordenado

// dato almacenado
$persona = array(
  'nombre'    => 'José Antonio',
  'apellido'  => 'Gutiérrez Jiménez',
  'edad'      => 32,
  'ocupacion' => 'Cocinero'
);


// presentación en frontend
$texto = $persona['apellido'] . ', ' . $persona['nombre'];
$texto .= '. ' . $persona['edad'] . ' años. ';
$texto .= $persona['ocupacion'] . '.';

echo $texto;



?>
