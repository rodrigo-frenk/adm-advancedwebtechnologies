      <h1>
         Funciones
      </h1>

      <p>
         Las funciones sirven para reutilizar un bloque de codigo.
      </p>


      <h3>Funciones basicas</h3>

      <?php


      function saludar() {

         echo "Hola, que tal?";

      }

      function despedir() {

         echo "Hasta luego.";

      }

      // podemos invocar la funcion usando su nombre:
      saludar();

      echo '<br />';

      despedir();



      ?>


      <h3>Realizando calculos basicos</h3>


      <?php


      function sumar_2_mas_3() {
         $numero1 = 2;
         $numero2 = 3;
         $resultado = $numero1 + $numero2;
         echo "La suma de 2 y 3 es: " . $resultado;
      }

      sumar_2_mas_3();

      echo '<br />';

      function sumar( $a, $b ) {

         $resultado = $a + $b;

         echo "La suma de " . $a . " y " . $b . " es: " . $resultado;

      }


      sumar( 20, 35 );

      echo '<br />';


      sumar( 120, 35 );

      echo '<br />';


      sumar( 220, 35 );

      echo '<br />';

      ?>



      <h2>Funciones que devuelven valores</h2>


      <?php


      function arrojar_valor_mas_grande( $a, $b ) {

         if( $a > $b ) {
            return $a;
         } else {
            return $b;
         }

      }

      echo "El valor mas grande es: ";
      echo arrojar_valor_mas_grande( 10, 7 );



      ?>
