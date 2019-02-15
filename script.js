// Enviamos los datos a la función para evaluar su desempeño
function evaluar() {
    
    // Desactivamos el uso de $ 
    // $.noConflict();

    // Parametros de la consulta
    var parametros = {
        "pagina" : "www.example.com", 
        "correo" : "correo@example.com"
    }

    // Realizamos la petición ajax con los parametros de la evaluacion
    jQuery.ajax({
        data: parametros,
        url: "evaluar.php",
        type: "post", 
        beforeSend: function() {
            console.log("Evaluando pagina");
            jQuery('#contenedor').append('<div class="alert alert-info mt-4 mb-4 id="notificacion"><strong> Generando Reporte! </strong> Espere un momento </div>');  
            jQuery('#contenedor').append('<div class="row"><div class="col-sm-12 col-md-4"> Columna 1 </div><div class="col-sm-12 col-md-8"> Columna 2 </div></div>');
        },
        success: function(response) {
            jQuery('#notificacion').text("Reporte Exitoso!");
            console.log("Evaluación completada: " + response);
        }
    });



}
