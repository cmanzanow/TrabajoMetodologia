$(document).ready(function(){
    var bandera=1;
    
    
    $('body').on('click', '#boton-subastar', function()
    {
        var codigo = document.getElementById("label-subastar").value;
        var codigo2 = document.getElementById("label-subastar2").value;
        alert(codigo2);
        
        $.ajax(
        {
            url: '../Controlador/Exito-subasta.php',
            type: 'POST',
            data: {'id': codigo, 'rut':codigo2}, 
            dataType: 'json',
        })
        
        .done(function(data) 
        {
            data.forEach(function(item)
            {
                alert("chupala");
            });
        })

        .fail(function() 
        {
            alert("Error al verificar!");
        });
    });
});