$(document).ready(function(){

   var boton;

   // seleccion por nombre de etiqueta
   boton = $('button');
   boton = $('header button');
   boton = $('header > button');

   // seleccion por clase
   boton = $('.boton');

   // seleccion por identidad
   boton = $('#boton');

   // interactividad basica:

   boton.click(function(){
      alert( "clicaste el #boton" );
   })



   // seleccionando multiples elementos:

   var cajas = $('.caja');

   // metodo width (o height) sirve para obtener el ancho
   console.log( "obtener ancho: ", $(window).width() );

   var win_w = $(window).width() / 3;


   // metodo width (o height) tambien sirve para asignar el ancho
   cajas.width( win_w );
   cajas.height( win_w );

   cajas.css({
      backgroundColor: '#def'
   });


   // iterar por todos los elementos seleccionados:
   cajas.each(function(){

      // guardar cada una de las cajas en una variable:
      // $(this) representa cada una de las cajas

      var caja_actual = $(this);

      var r, g, b, color;

      // generar un color al azar

      // los componentes deben ser numeros enteros entre 0 y 255
      r = parseInt( Math.random() * 255 );
      g = parseInt( Math.random() * 255 );
      b = parseInt( Math.random() * 255 );

      // integrar valor en un String para uso con CSS :
      // color = rgba(255,255,255,0.5);

      color = 'rgb( ' + r + ', ' + g + ', ' + b + ' )';
      // background-color: rgb(255,0,125);

      console.log( color );

      caja_actual.css({
         backgroundColor: color
      });

   });


   cajas.click(function(){

      var caja_actual = $(this);

      // generar una duracion al azar entre 100 y 2100
      var duracion = 100 + ( Math.random() * 2000 );

      caja_actual.animate(
         {
            marginTop: 150 + ( Math.random() * 400 )
         },
         duracion
      );

   });


   console.log( "Intro JS: listo" );


});
