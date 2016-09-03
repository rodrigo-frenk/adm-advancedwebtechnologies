$(document).ready(function(){

   var menu = $('#menu');

   var icono_menu = $('#icono-menu-movil');

   // revisar tamaño de ventana
   function cambiar_tamanno_ventana() {

      var win_w = $(window).width();

      if( win_w <= 768 ) {

         $('#menu').addClass('hidden');
         $('#icono-menu-movil').removeClass('hidden');

      } else {

         $('#icono-menu-movil').addClass('hidden');
         $('#menu').removeClass('hidden');

      }

   }


   $(window).resize( cambiar_tamanno_ventana );

   $(window).trigger('resize');






   $('#icono-menu-movil').click(function(){

      if( $('#menu').hasClass('hidden') ) {

         var nuevaCaja = $('<div>');

         nuevaCaja.addClass('caja_menu_flotante');
         nuevaCaja.attr( 'id','caja_menu_flotante');

         var botonCerrar =  $('<div>');

         botonCerrar.attr('id', 'boton-cerrar-menu' );
         botonCerrar.html( 'Cerrar' );

         nuevaCaja.html( botonCerrar );

         var menu = $( '#menu' );

         nuevaCaja.append( menu.html() );


         nuevaCaja.hide();

         $('body').prepend( nuevaCaja );

         nuevaCaja.fadeIn();


         $('#boton-cerrar-menu').click(function(){

            // fadeout con duracion y función a ejecutarse tras la animacion
            $('#caja_menu_flotante').fadeOut( 500, function(){

               // esta acción se realizará al terminar el fadeout
               $('#caja_menu_flotante').remove();

            });

         })



      }

   });


   var scroll_anterior = 0;

   $(window).scroll( function(){

      var direccion;

      var scroll_ventana = $(window).scrollTop();

      if( scroll_ventana < scroll_anterior ) {
         direccion = "arriba";
      } else {
         direccion = "abajo";
      }
      scroll_anterior = scroll_ventana;

      if( scroll_ventana > 100 ) {

         $('#cabecera').css({
            position:'fixed'
         })

         if( direccion == "abajo" ) {


            setTimeout(function(){

               $('#cabecera').stop().animate({
                  marginTop: -$('#cabecera').height()
               }, 500)

            }, 800 );

         } else {

               $('#cabecera').stop().animate({
                  marginTop: 0
               }, 500)

         }

      } else {
         $('#cabecera').css({
            position:'relative'
         })
      }

   });

   $(window).trigger('scroll');

});
