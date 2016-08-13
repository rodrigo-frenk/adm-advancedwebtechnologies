<h1>Arreglos o <i>Arrays</i></h1>


<?php

/*

Un arreglo es un conjunto de datos que están almacenados secuencialmente

*/

?>

<h3>Arreglo sencillo</h3>
<?php



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


<h2>Mostrando todos los contenidos</h2>

<?php
$numeros_primos_menores_a_20 = array(
   1,
   3,
   5,
   7,
   11,
   13,
   17,
   19
);




?>


<ul>

   <?php for ($i=0; $i < 8; $i++) { ?>

      <li>
         El numero
         <b>
            <?php echo $numeros_primos_menores_a_20[ $i ]; ?>
         </b>
          es un numero primo.
      </li>

   <?php } ?>

</ul>


<?php












?>

<br>


<h3>Iterando con For</h3>
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
  'Guanábana',
  'Piña',
  'Papaya'
);



$numero_de_frutas = count( $frutas );


for ($i=0; $i < $numero_de_frutas; $i++) {
  // recuperar nombre de fruta utilizando el índice del arreglo:

  echo '<li>'. 'En esta tienda tambien se vende ' . $frutas[ $i ] . '</li>';
}





// ciclo foreach: itera por cada elemento


/*
// por cada uno de los alumnos
foreach ($alumnos as $alumno ) {
   //    voy a preguntar su nombre
   $nombre = $alumno -> preguntarNombre();

   //    y si lo veo en la lista
   if( esta_en_la_lista ( $nombre ) ) {

      //    dibujo una palomita
      marcar_palomita_en_lista();

   }
}
*/

?>

<h3>Iterando con <b>foreach</b></h3>
<?php



foreach ( $frutas as $una_fruta ) {

  echo '<li>'. 'En esta tienda tambien se vende ' . $una_fruta . '</li>';

}


?>

<br>

<h2>Arreglos Asociativos</h2>

<?php

/*

Arreglos Asociativos

Aquí, los datos son almacenados utilizando índices no numéricos


array( "indice" => $valor );
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


<h1>Usando Arreglos Asociativos para almacenar datos distintos</h1>

<?php

// dato almacenado
$persona1 = array(
  'nombre'    => 'Jose Antonio',
  'apellido'  => 'Gutierrez Jimenez',
  'edad'      => 32,
  'ocupacion' => 'Cocinero'
);



// presentación en frontend
$texto = $persona1['apellido'] . ', ' . $persona1['nombre'] . '. ';
$texto .= $persona1['edad'] . ' anhos. ';
$texto .= $persona1['ocupacion'] . '.';

echo $texto;

echo '<br>';




?>


<h2>Utilizar <b>arreglos anidados</b> para evitar redundancia</h2>


<?php


$persona1 = array(
  'nombre'    => 'Jose Antonio',
  'apellido'  => 'Gutierrez Jimenez',
  'edad'      => 32,
  'ocupacion' => 'Cocinero',
  'imagen'    => 'avatar1.jpg'
);


$persona2 = array(
  'nombre'    => 'Luis Ernesto',
  'apellido'  => 'Torres Perez',
  'edad'      => 25,
  'ocupacion' => 'Estudiante',
  'imagen'    => 'avatar2.jpg'
);

$persona3 = array(
  'nombre'    => 'Alondra',
  'apellido'  => 'Perez Perez',
  'edad'      => 23,
  'ocupacion' => 'Estudiante',
  'imagen'    => 'avatar3.jpg'
);

$persona4 = array(
  'nombre'    => 'Pedro',
  'apellido'  => 'García Esquivel',
  'edad'      => 29,
  'ocupacion' => 'Contador',
  'imagen'    => 'avatar4.jpg'
);


$personas = array(
   $persona1,
   $persona2,
   $persona3,
   $persona4
);


$carpeta_imgs = 'imgs/';



?>

<ul>

   <?php foreach ( $personas as $una_persona ) { ?>

      <li>

         <?php
         // $una_persona['imagen']
         $html = '<img src="' . $carpeta_imgs . $una_persona['imagen'] . '" alt="" style="width:100px"/>';
         $html .= $una_persona['apellido'] . ', ' . $una_persona['nombre'];
         $html .= '. ' . $una_persona['edad'] . ' anhos. ';
         $html .= $una_persona['ocupacion'] . '.';
         echo $html;

         ?>

      </li>

   <?php } ?>
</ul>



<?php




?>
