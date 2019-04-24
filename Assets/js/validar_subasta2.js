$(document).ready(function(){
    var bandera=1;
    
    
    $('body').on('click', '#boton-subastar', function()
    {
        var codigo = document.getElementById("label-subastar").value;
        var codigo2 = document.getElementById("label-subastar2").value;
        
        $.ajax(
        {
            url: '../Controlador/Exito-subasta.php',
            type: 'POST',
            data: {'id': codigo, 'rut':codigo2}, 
            dataType: 'json',
        })
        
        .done(function(data) 
        {
            if(data=="1"){
                alert("Pasaje en Subasta");
                location.reload();
            }
            else{
                alert("Ingrese los campos");
            }
        })

        .fail(function() 
        {
            alert("Error al verificar!");
        });
    });
});