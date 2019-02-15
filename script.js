// Enviamos los datos a la función para evaluar su desempeño
function evaluar() {
    
    // Desactivamos el uso de $ 
    // $.noConflict();

    // Parametros de la consulta
    var parametros = {
        "pagina" : "www.example.com", 
        "correo" : "correo@example.com"
    }

    // Peticion ajax
    jQuery.ajax({
        data: parametros,
        url: "evaluar.php",
        type: "post", 
        beforeSend: function() {
            console.log("Evaluando pagina");
            $('#contenedor').append('<div class="panel panel-primary"><div class="panel-heading"> Resultado </div></div>');  
        },
        success: function(response) {
            console.log("Evaluación completada: " + response);
        }
    });

}