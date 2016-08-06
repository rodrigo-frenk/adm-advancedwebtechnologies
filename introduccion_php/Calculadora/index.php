<!DOCTYPE html>
<html>
   <head>
      <meta charset="utf-8">
      <title>Calculadora</title>

      <style>

         .caja {

            /*w50%*/
            width: 50%;

            /*p50*/
            padding: 50px;

            border:1px solid #DDD;

            float: left;
            box-sizing: border-box;

            /*h60vh */
            height: 60vh;
         }

         input, label, button {

            width: 50%;
            display:block;

         }

      </style>

   </head>
   <body>


      <?php

      $numero1 = 0;
      $numero2 = 0;
      $operacion = 0;

      $resultado = false;

      // $operacion = false;

      if( isset( $_POST['numero1'] ) ) {
         $numero1 = $_POST['numero1'];
      }

      if( isset( $_POST['numero2'] ) ) {
         $numero2 = $_POST['numero2'];
      }

      if( isset( $_POST['operacion'] ) ) {
         $operacion = $_POST['operacion'];
      }

      if( $operacion ) {

         if( $operacion == "sumar" ) {
            $resultado = sumar( $numero1, $numero2 );
         }
         if( $operacion == "restar" ) {
            $resultado = restar( $numero1, $numero2 );
         }
         if( $operacion == "multiplicar" ) {
            $resultado = multiplicar( $numero1, $numero2 );
         }
         if( $operacion == "dividir" ) {
            $resultado = dividir( $numero1, $numero2 );
         }

      }

      function sumar( $a, $b ) {
         $resultado = $a + $b;
         return $resultado;
      }

      function restar( $a, $b ) {
         $resultado = $a - $b;
         return $resultado;
      }

      function multiplicar( $a, $b ) {
         $resultado = $a * $b;
         return $resultado;
      }

      function dividir( $a, $b ) {
         $resultado = $a / $b;
         return $resultado;
      }

      ?>


      <h1>Calculadora</h1>


      <form id="inputs" class="caja" action="" method="POST">
      <!-- <form id="inputs" class="caja" action="calcular.php" method="POST"> -->

         <label for="numero1">Número 1</label>
         <!-- input#numero1[name="numero1"] -->
         <input type="number" id="numero1" name="numero1" value="<?php echo $numero1; ?>">


         <label for="numero2">Número 2</label>
         <!-- input#numero1[name="numero1"] -->
         <input type="number" id="numero2" name="numero2" value="<?php echo $numero2; ?>">


         <fieldset>

            <!-- (label[for=operacion$]{Operacion $}+input[name=operacion][type=checkbox][value=operacion$])*4 -->


                                          <?php
                                          /*
                                          # Sintaxis Abreviada para "IF":
                                          # En vez de escribir:

                                          $condicion = $a > $b;

                                          if( $condicion ) {
                                             echo "algo";
                                          } else {
                                             echo "otra cosa";
                                          }

                                          # Podemos abreviarlo:

                                          echo $condicion ? "algo" : "otra cosa";

                                          */ ?>
            <label for="sumar">Sumar</label>
            <input type="radio" name="operacion" value="sumar" <?php echo $operacion=='sumar' ? 'checked' : ''; ?>>

            <label for="restar">Restar</label>
            <input type="radio" name="operacion" value="restar" <?php echo $operacion=='restar' ? 'checked' : ''; ?>>

            <label for="multiplicar">Multiplicar</label>
            <input type="radio" name="operacion" value="multiplicar" <?php echo $operacion=='multiplicar' ? 'checked' : ''; ?>>

            <label for="dividir">Dividir</label>
            <input type="radio" name="operacion" value="dividir" <?php echo $operacion=='dividir' ? 'checked' : ''; ?>>


         </fieldset>


         <!-- input[type="submit"][value="Calcular"] -->
         <input type="submit" value="Calcular">

      </form>

      <div id="resultado" class="caja">

         <h1>
            <?php echo $resultado; ?>
         </h1>

      </div>

   </body>
</html>
