<h1>Básicos de Lenguajes</h1>

<?php

// Básicos de Lenguaje

// 1. Variables
/*
En PHP, podemos almacenar todo tipo de datos en cualquier variable
*/
$una_variable = 17;
$otra_variable = 18;

echo $una_variable + $otra_variable;

?>

<br>

<?php

// variable con String (cadena de caracteres)
$texto = 'Un texto: ';

// aumentando texto a la variable:
$texto = $texto . 'Podemos';

// modo equivalente de escribirlo:
$texto .= ' escribir';

$texto .= ' un enunciado.';



echo $texto;

?>

<br>
