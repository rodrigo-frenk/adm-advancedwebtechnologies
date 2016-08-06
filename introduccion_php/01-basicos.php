<!-- lo que pongamos aquí es HTML -->


<!-- Podemos incluir bloques de PHP: -->
<?php // Esto es PHP ?>

<?php

/*

PHP:

Hypertext Pre-Processor

*/

// Comentario de una sola línea

# Comentario de una sola línea

/*
Comentario
multi
línea
*/

// la funcion echo muestra lo que le siga en la pantalla

// mostrar un String (cadena de caracteres)
echo "Un saludo";

// escribir etiquetas
echo '<br>';
echo "<br>";

// calcular
echo 1+8;

?>

<h3>
  <?php echo "Estilo Intercalado"; ?>
</h3>


<?php echo '<h3>' . 'Estilo Encadenado' . '</h3>'; ?>
