$(document).ready(function(){
    var bandera=1;
    
    
    $('body').on('click', '#boton-subastar', function()
    {
        var codigo = document.getElementById("label-subastar").value;
        var algo = getParameterByName('usuario');
        alert (algo);
        /*$.ajax(
        {
            url: '../Controlador/Exito-subasta.php',
            type: 'POST',
            data: {'id': codigo}, 
            dataType: 'json',
        })
        
        .done(function(data) 
        {
            alert(data);
        })

        .fail(function() 
        {
            alert("Error al verificar!");
        });*/
    });
});