$(document).ready(function(){


    
    $('#LogIn').click(function(){

        var errores = '';

        // Validado Nombre ==============================
        if( $('#nickname').val() == '' ){
            errores += '<p>Ingrese su id!</p>';
            $('#nickname').css("border-bottom-color", "#F14B4B")
        } else{
            $('#nickname').css("border-bottom-color", "#d1d1d1")
        }

        // Validado Correo ==============================
        if( $('#pw').val() == '' ){
            errores += '<p>Ingrese su password!</p>';
            $('#pw').css("border-bottom-color", "#F14B4B")
        } else{
            $('#pw').css("border-bottom-color", "#d1d1d1")
        }



        // Validado Correo ==============================
        if( $('#ubicacion').val() == '' ){
            errores += '<p>Ingrese la ubicacion / calle de la contingencia!</p>';
            $('#ubicacion').css("border-bottom-color", "#F14B4B")
        } else{
            $('#ubicacion').css("border-bottom-color", "#d1d1d1")
        }

        // Validado Mensaje ==============================
      //  if( $('#mensaje').val() == '' ){
      //      errores += '<p>Escriba un mensaje</p>';
      //      $('#mensaje').css("border-bottom-color", "#F14B4B")
      //  } else{
      //      $('#mensaje').css("border-bottom-color", "#d1d1d1")
      //  }



        // ENVIANDO MENSAJE ============================
        if( errores == '' == false){
            var mensajeModal = '<div class="modal_wrap">'+
                                    '<div class="mensaje_modal">'+
                                        '<h3>Errores encontrados</h3>'+
                                        errores+
                                        '<span id="btnClose">Cerrar</span>'+
                                    '</div>'+
                                '</div>'

            $('body').append(mensajeModal);
        }

        // CERRANDO MODAL ==============================
        $('#btnClose').click(function(){
            $('.modal_wrap').remove();
        });
    });

});
