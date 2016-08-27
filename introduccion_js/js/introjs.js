$(document).ready(function(){

   // seleccion por nombre de etiqueta
   var boton;

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

   var win_w = $(window).width() / 3;

   cajas.width( win_w );
   cajas.height( win_w );

   cajas.css({
      backgroundColor: '#def'
   })

   // iterar por todos los elementos seleccionados:

   cajas.each(function(){

      var caja_actual = $(this);

      var r, g, b, rgb;

      // generar un color al azar

      // los componentes deben ser numeros enteros entre 0 y 255
      r = parseInt( Math.random() * 255 );
      g = parseInt( Math.random() * 255 );
      b = parseInt( Math.random() * 255 );

      rgb = 'rgb( ' + r + ', ' + g + ', ' + b + ' )';
      // background-color: rgb(255,0,125);

      console.log( rgb );

      caja_actual.css({
         backgroundColor: rgb
      });

   });


   cajas.click(function(){

      var caja_actual = $(this);

      var velocidad = 100 + ( Math.random() * 2000 );

      caja_actual.animate(
         {
            marginTop: 150 + ( Math.random() * 400 )
         },
         velocidad
      );

   });


   console.log( "Intro JS: listo" );


});
