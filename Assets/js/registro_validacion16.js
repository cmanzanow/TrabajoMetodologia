var usuario_r=2;
var rut_r=2;
var correo_r=2;
var nombre_r=2;
var apellido_r=2;
var direccion_r=2;
var contraseña_r=2;
var repetir_r=2;
var telefono_r=2;

$(document).ready(function()
{
        
    $("#recordar").click(function(){
        //abrir ventana con texto js
        location.href ="../Controlador/RecuperarPW.php";
        
    });
    
    $(document).on("keypress", 'form', function (e) 
    {
        var code = e.keyCode || e.which;
        if (code == 13) 
        {
            e.preventDefault();
            return false;
        }
    });


	$("input#nickname").on("keyup",function()
	{
        var valor = $(this).val();
        //$("div#mensaje p").html(valor);

        $.ajax(
        {
            url: '../Controlador/0.3 validar registro usuario.php',
            type: 'POST',
            data: {'id': valor}, 
            dataType: 'json',
        })

        .done(function(data) 
        {
        	if(data>0)
        	{
        		document.getElementById('comprobado').src = "../Assets/imagen/error.png";
        		$('#nickname').css("border-bottom-color", "#F14B4B")
        		$('div#mensaje p').css("color", "#F14B4B")
        		
        		usuario_r=1;
        	}
        	else
        	{
        		document.getElementById('comprobado').src = "../Assets/imagen/comprobado.png";
        		$('#nickname').css("border-bottom-color", "#56EB3B")
        		$('div#mensaje p').css("color", "#56EB3B")

        		usuario_r=0;
        	}

        	if(valor.length<1)
        	{
        		document.getElementById('comprobado').src = "../Assets/imagen/info.png";
        		$('#nickname').css("border-bottom-color", "#066AB8")
        		$('div#mensaje p').css("color", "#fff")

        		usuario_r=2;
        	}

            //document.write(data);
        })

        .fail(function() 
        {
          	alert("Error al verificar!");
        });

	});

	$("input#rut").on("keyup",function()
	{
        var valor = $(this).val();

        $.ajax(
        {
            url: '../Controlador/0.3 validar registro rut.php',
            type: 'POST',
            data: {'rut': valor}, 
            dataType: 'json',
        })

        .done(function(data) 
        {
        	if(data>0)
        	{
        		document.getElementById('comprobado2').src = "../Assets/imagen/error.png";
        		$('#rut').css("border-bottom-color", "#F14B4B")
        		$('div#mensaje2 p').css("color", "#F14B4B")
        		rut_r=1;    		
        	}
        	else
        	{
        		document.getElementById('comprobado2').src = "../Assets/imagen/comprobado.png";
        		$('#rut').css("border-bottom-color", "#56EB3B")
        		$('div#mensaje2 p').css("color", "#56EB3B")
        		rut_r=0;
        	}

        	if(data.length<1)
        	{
        		document.getElementById('comprobado2').src = "../Assets/imagen/info.png";
        		$('#rut').css("border-bottom-color", "#066AB8")
        		$('div#mensaje2 p').css("color", "#fff")
        		rut_r=2;
        	}
        })

        .fail(function() 
        {
          	alert("Error al verificar!");
        });

	});

    $("input#email").on("keyup",function()
	{
        var valor = $(this).val();

        $.ajax(
        {
            url: '../Controlador/0.3 validar registro email.php',
            type: 'POST',
            data: {'email': valor}, 
            dataType: 'json',
        })

        .done(function(data) 
        {
        	if(data>0)
        	{
        		document.getElementById('comprobado3').src = "../Assets/imagen/error.png";
        		$('#email').css("border-bottom-color", "#F14B4B")
        		$('div#mensaje3 p').css("color", "#F14B4B")
                correo_r=1;
        	}
        	else
        	{
        		document.getElementById('comprobado3').src = "../Assets/imagen/comprobado.png";
        		$('#email').css("border-bottom-color", "#56EB3B")
        		$('div#mensaje3 p').css("color", "#56EB3B")
                correo_r=0;
        	}

        	if(data.length<1)
        	{
        		document.getElementById('comprobado3').src = "../Assets/imagen/info.png";
        		$('#email').css("border-bottom-color", "#066AB8")
        		$('div#mensaje3 p').css("color", "#fff")
                correo_r=2;
        	}
        })

        .fail(function() 
        {
          	alert("Error al verificar!");
        });

	});


	$("input#password").on("keyup",function()
	{
        var valor = $(this).val();

        var pas1 = $("#password2").val();


	

        $.ajax(
        {
            url: '../Controlador/0.3 validar registro pw.php',
            type: 'POST',
            data: {'pw': valor,'pw2': pas1}, 
            dataType: 'json',
        })

        .done(function(data) 
        {
        	if(data==11)
        	{
        		document.getElementById('comprobado7').src = "../Assets/imagen/error.png";
        		document.getElementById('comprobado8').src = "../Assets/imagen/error.png";
        		$('#password').css("border-bottom-color", "#F14B4B")
        		$('div#mensaje7 p').css("color", "#F14B4B")
        		$('#password2').css("border-bottom-color", "#F14B4B")
        		$('div#mensaje8 p').css("color", "#F14B4B")
        		contraseña_r=1;     		
        	}
        	if(data==10)
        	{
        		document.getElementById('comprobado7').src = "../Assets/imagen/comprobado.png";
        		document.getElementById('comprobado8').src = "../Assets/imagen/comprobado.png";
        		$('#password').css("border-bottom-color", "#56EB3B")
        		$('div#mensaje7 p').css("color", "#56EB3B")
        		$('#password2').css("border-bottom-color", "#56EB3B")
        		$('div#mensaje8 p').css("color", "#56EB3B")
        		contraseña_r=0;
        	}
        	if(data==1)
        	{
        		document.getElementById('comprobado7').src = "../Assets/imagen/error.png";
        		$('#password').css("border-bottom-color", "#F14B4B")
        		$('div#mensaje7 p').css("color", "#F14B4B")
        		contraseña_r=1;
        	}
        	if(data==0)
        	{
        		document.getElementById('comprobado7').src = "../Assets/imagen/comprobado.png";
        		$('#password').css("border-bottom-color", "#56EB3B")
        		$('div#mensaje7 p').css("color", "#56EB3B")
        		contraseña_r=0;
        	}

        	if(data.length<1)
        	{
        		document.getElementById('comprobado7').src = "../Assets/imagen/info.png";
        		$('#password').css("border-bottom-color", "#066AB8")
        		$('div#mensaje7 p').css("color", "#fff")
        		contraseña_r=2;
        	}
        })

        .fail(function() 
        {
          	alert("Error al verificar!");
        });

	});


	$("input#password2").on("keyup",function()
	{
        var valor = $(this).val();

        var pas1 = $("#password").val();


	

        $.ajax(
        {
            url: '../Controlador/0.3 validar registro pw2.php',
            type: 'POST',
            data: {'pw': pas1,'pw2': valor}, 
            dataType: 'json',
        })

        .done(function(data) 
        {
        	if(data==11)
        	{
        		document.getElementById('comprobado8').src = "../Assets/imagen/error.png";
        		document.getElementById('comprobado7').src = "../Assets/imagen/error.png";
        		$('#password').css("border-bottom-color", "#F14B4B")
        		$('div#mensaje7 p').css("color", "#F14B4B")
        		$('#password2').css("border-bottom-color", "#F14B4B")
        		$('div#mensaje8 p').css("color", "#F14B4B")
        		repetir_r=1;      		
        	}
        	if(data==10)
        	{
        		document.getElementById('comprobado8').src = "../Assets/imagen/comprobado.png";
        		document.getElementById('comprobado7').src = "../Assets/imagen/comprobado.png";
        		$('#password').css("border-bottom-color", "#56EB3B")
        		$('div#mensaje7 p').css("color", "#56EB3B")
        		$('#password2').css("border-bottom-color", "#56EB3B")
        		$('div#mensaje8 p').css("color", "#56EB3B")
        		repetir_r=0;
        	}
        	if(data==1)
        	{
        		document.getElementById('comprobado8').src = "../Assets/imagen/error.png";
        		$('#password2').css("border-bottom-color", "#F14B4B")
        		$('div#mensaje8 p').css("color", "#F14B4B")
        		repetir_r=1; 
        	}
        	if(data==0)
        	{
        		document.getElementById('comprobado8').src = "../Assets/imagen/comprobado.png";
        		$('#password2').css("border-bottom-color", "#56EB3B")
        		$('div#mensaje8 p').css("color", "#56EB3B")
        		repetir_r=0;
        	}

        	if(data.length<1)
        	{
        		document.getElementById('comprobado8').src = "../Assets/imagen/info.png";
        		$('#password2').css("border-bottom-color", "#066AB8")
        		$('div#mensaje8 p').css("color", "#fff")
        		repetir_r=2;
        	}
        })

        .fail(function() 
        {
          	alert("Error al verificar!");
        });

	});


    $("input#name").on("keyup",function()
	{
        var valor = $(this).val();

        $.ajax(
        {
            url: '../Controlador/0.3 validar registro names.php',
            type: 'POST',
            data: {'names': valor}, 
            dataType: 'json',
        })

        .done(function(data) 
        {
        	if(data>0)
        	{
        		document.getElementById('comprobado4').src = "../Assets/imagen/error.png";
        		$('#name').css("border-bottom-color", "#F14B4B")
        		$('div#mensaje4 p').css("color", "#F14B4B")
        		nombre_r=1;     		
        	}
        	else
        	{
        		document.getElementById('comprobado4').src = "../Assets/imagen/comprobado.png";
        		$('#name').css("border-bottom-color", "#56EB3B")
        		$('div#mensaje4 p').css("color", "#56EB3B")
        		nombre_r=0;
        	}

        	if(data.length<1)
        	{
        		document.getElementById('comprobado4').src = "../Assets/imagen/info.png";
        		$('#name').css("border-bottom-color", "#066AB8")
        		$('div#mensaje4 p').css("color", "#fff")
        		nombre_r=2;
        	}	
        })

        .fail(function() 
        {
          	alert("Error al verificar!");
        });

	});


	$("input#lastname").on("keyup",function()
	{
        var valor = $(this).val();

        $.ajax(
        {
            url: '../Controlador/0.3 validar registro lastname.php',
            type: 'POST',
            data: {'lastname': valor}, 
            dataType: 'json',
        })

        .done(function(data) 
        {
        	if(data>0)
        	{
        		document.getElementById('comprobado5').src = "../Assets/imagen/error.png";
                $('#lastname').css("border-bottom-color", "#F14B4B")
        		$('div#mensaje5 p').css("color", "#F14B4B")
        		apellido_r=1;
        	}
        	else
        	{
        		document.getElementById('comprobado5').src = "../Assets/imagen/comprobado.png";
                $('#lastname').css("border-bottom-color", "#56EB3B")
        		$('div#mensaje5 p').css("color", "#56EB3B")
        		apellido_r=0;
        	}

        	if(data.length<1)
        	{
        		document.getElementById('comprobado5').src = "../Assets/imagen/info.png";
                $('#lastname').css("border-bottom-color", "#066AB8")
        		$('div#mensaje5 p').css("color", "#fff")
        		apellido_r=2;
        	}	
        })

        .fail(function() 
        {
          	alert("Error al verificar!");
        });

	});


	$("input#address").on("keyup",function()
	{
        var valor = $(this).val();

        $.ajax(
        {
            url: '../Controlador/0.3 validar registro address.php',
            type: 'POST',
            data: {'address': valor}, 
            dataType: 'json',
        })

        .done(function(data) 
        {
        	if(data>0)
        	{
        		gatillo="tu hermana";
        		document.getElementById('comprobado6').src = "../Assets/imagen/error.png";
        		$('#address').css("border-bottom-color", "#F14B4B")
        		$('div#mensaje6 p').css("color", "#F14B4B")
        		direccion_r=1;     		
        	}
        	else
        	{
        		document.getElementById('comprobado6').src = "../Assets/imagen/comprobado.png";
        		$('#address').css("border-bottom-color", "#56EB3B")
        		$('div#mensaje6 p').css("color", "#56EB3B")
        		direccion_r=0;
        	}

        	if(data.length<1)
        	{
        		document.getElementById('comprobado6').src = "../Assets/imagen/info.png";
        		$('#address').css("border-bottom-color", "#066AB8")
        		$('div#mensaje6 p').css("color", "#fff")
        		direccion_r=2;
        	}	
        })

        .fail(function() 
        {
          	alert("Error al verificar!");
        });

	});


	$("input#phone").on("keyup",function()
	{
        var valor = $(this).val();

        $.ajax(
        {
            url: '../Controlador/0.3 validar registro phone.php',
            type: 'POST',
            data: {'phone': valor}, 
            dataType: 'json',
        })

        .done(function(data) 
        {
        	if(data>0)
        	{
        		document.getElementById('comprobado9').src = "../Assets/imagen/error.png";
        		$('#phone').css("border-bottom-color", "#F14B4B")
        		$('div#mensaje9 p').css("color", "#F14B4B")
        		telefono_r=1;     		
        	}
        	else
        	{
        		document.getElementById('comprobado9').src = "../Assets/imagen/comprobado.png";
        		$('#phone').css("border-bottom-color", "#56EB3B")
        		$('div#mensaje9 p').css("color", "#56EB3B")
        		telefono_r=0;
        	}

        	if(data.length<1)
        	{
        		document.getElementById('comprobado9').src = "../Assets/imagen/info.png";
        		$('#phone').css("border-bottom-color", "#066AB8")
        		$('div#mensaje9 p').css("color", "#fff")
        		telefono_r=2;
        	}	
        })

        .fail(function() 
        {
          	alert("Error al verificar!");
        });

	});

    $(".form-wrapper").submit(function(e) {
        if(usuario_r!=0 || rut_r!=0 || correo_r!=0 || nombre_r!=0 || apellido_r!=0 || direccion_r!=0 || contraseña_r!=0 || repetir_r!=0 || telefono_r!=0)
        {
            e.preventDefault();
        }
    });


	$('#submit').click(function()
	{
        var errores = '';

        if(usuario_r == 2)
        {
        	errores += '<p>Ingrese un ID de Usuario!</p>';
            $('#nickname').css("border-bottom-color", "#066AB8")
        }
        if(usuario_r == 1)
        {
        	errores += '<p>El ID de usuario es incorrecto <br> o ya esta en uso!</p>';
        }

        if(rut_r == 2)
        {
        	errores += '<p>Ingrese su rut!</p>';
            $('#rut').css("border-bottom-color", "#066AB8")
        }
        if(rut_r == 1)
        {
        	errores += '<p>El rut ingresado es incorrecto <br> o ya esta en uso!</p>';
        }

        if(correo_r == 2)
        {
        	errores += '<p>Ingrese un correo electronico!</p>';
            $('#email').css("border-bottom-color", "#066AB8")
        }
        if(correo_r == 1)
        {
        	errores += '<p>El correo ingresado es incorrecto <br> o ya esta en uso!</p>';
        }

        if(nombre_r == 2)
        {
        	errores += '<p>Ingrese su nombre!</p>';
            $('#name').css("border-bottom-color", "#066AB8")
        }
        if(nombre_r == 1)
        {
        	errores += '<p>El nombre ingresado contiene caracteres <br> inadecuados o no esta en el rango limite de caracteres!</p>';
        }

        if(apellido_r == 2)
        {
        	errores += '<p>Ingrese su apellido!</p>';
            $('#lastname').css("border-bottom-color", "#066AB8")
        }
        if(apellido_r == 1)
        {
        	errores += '<p>El apellido ingresado contiene caracteres <br> inadecuados o no esta en el rango limite de caracteres!</p>';
        }

        if(direccion_r == 2)
        {
        	errores += '<p>Ingrese su dirección, domicilio!</p>';
            $('#address').css("border-bottom-color", "#066AB8")
        }
        if(direccion_r == 1)
        {
        	errores += '<p>La dirección ingresada contiene caracteres <br> inadecuados o no esta en el rango limite de caracteres!</p>';
        }

        if(contraseña_r == 2)
        {
        	errores += '<p>Ingrese su contraseña!</p>';
            $('#password').css("border-bottom-color", "#066AB8")
        }
        if(contraseña_r == 1)
        {
        	errores += '<p>La contraseña ingresada contiene caracteres <br> inadecuados, no esta en el rango limite de caracteres, <br>o no coincide con la segunda contraseña!</p>';
        }

        if(repetir_r == 2)
        {
        	errores += '<p>Repita la contraseña!</p>';
            $('#password2').css("border-bottom-color", "#066AB8")
        }
        if(repetir_r == 1)
        {
        	errores += '<p>La repetición ingresada contiene caracteres <br> inadecuados, no esta en el rango limite de caracteres, <br>o no coincide con la segunda contraseña!</p>';
        }

        if(telefono_r == 2)
        {
        	errores += '<p>Ingrese su teléfono!</p>';
            $('#phone').css("border-bottom-color", "#066AB8")
        }
        if(telefono_r == 1)
        {
        	errores += '<p>El teléfono ingresado contiene letras <br> inadecuadas o no esta en el rango limite de números!</p>';
        }
        



        if( errores == '' == false){

            var mensajeModal = '<div class="modal_wrap">'+
                                    '<div class="mensaje_modal">'+
                                        "<h3 style='color:#000000'>Errores encontrados</h3>"+
                                        errores+
                                        '<span id="btnClose">Cerrar</span>'+
                                    '</div>'+
                                '</div>'

            $('body').append(mensajeModal);
        }

        $('#btnClose').click(function(){
            $('.modal_wrap').remove();
        });

	});

});
