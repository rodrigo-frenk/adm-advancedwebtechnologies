<h1>Bucles o <i>Loops</i></h1>

<?php

/*
Bucles:

Estructuras que repiten un bloque de instrucciones
mientras se cumpla una condición

*/


/*

for

sintaxis del bucle 'for':

estado inicial: $i = 0
condición para continuar: $i < 10
incremento: $i++ (aumenta 1 cada vez)

Aclaración: '$i++' es lo mismo que '$i = $i + 1'
*/


?>

<ul>

  <?php

  for ($i=0; $i < 10; $i++) {

    echo '<li>' . 'Elemento lista número ' . ( $i + 1 ) . '</li>';

  }

  ?>

</ul>





<?php

/*

while

el bucle while repetirá un bloque de instrucciones
mientras una condición se cumpla

*/

$i = 20;

?>

<ul>

  <?php

  while ( $i > 0 ) {

    echo '<li>' . 'Nos quedan ' . ( $i ) . '</li>';

    $i -= 2;

  }

  ?>

</ul>
