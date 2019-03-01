// Enviamos los datos a la función para evaluar su desempeño
var isBack = false;

function evaluar() {
    
    // Desactivamos el uso de $ 
    // $.noConflict();

    var pagina = jQuery("#pagina").val();
    var correo = jQuery("#correo").val();
    console.log("Pagina: " + pagina + "; Correo: " + correo);

    // Parametros de la consulta
    var parametros = {
        "pagina" : pagina, 
        "correo" : correo
    }

    // Realizamos la petición ajax con los parametros de la evaluacion
    if(!isBack) { 
        isBack = true;
        jQuery.ajax({
            data: parametros,
            url: "evaluar.php",
            type: "post", 
            beforeSend: function() {
                console.log("Evaluando pagina");
                jQuery('#contenedor').append('<div class="alert alert-info mt-4 mb-2 id="notificacion"><strong> Generando Reporte! </strong> Espere un momento </div>');  
            },
            success: function(response) {
                console.log("Evaluación completada: " + response); 
                let respuesta = JSON.parse(response); 
                jQuery('#contenedor').append('<div class="row p-3"><div id="detalles" class="col-sm-12 col-md-4 p-2 detalles"> </div><div id="informacion" class="col-sm-12 col-md-8 border"> </div></div>');
                jQuery('#detalles').append('<p class="text-center"><strong> Detalles de la Prueba </strong></p>');
                jQuery('#detalles').append('<p> ID Prueba: ' + respuesta.id + '</p>');   
                jQuery('#detalles').append('<p> Resultado Completo: ' +  respuesta.report);
                jQuery('#informacion').append('<p><strong> Puntuación PageSpeed: ' +  respuesta.score + "% </strong></p>");
                if(respuesta.score >= 80) {
                    jQuery('#informacion').append('<p> Una puntuación mayor a 80 significa que su sitio requiere ajustes menores </p>');
                }
                jQuery('#informacion').append('<p><strong> Puntuación YSlow: ' +  respuesta.yslow + "% </strong></p>");
                jQuery('#informacion').append('<p><strong> Tiempo de carga(ms): ' +  respuesta.time + "% </strong></p>");
                jQuery('#informacion').append('<p><strong> Carga HTML: ' +  respuesta.cargaHTML + "% </strong></p>");
                jQuery('#informacion').append('<p><strong> Page Elements: ' +  respuesta.pageElements + "% </strong></p>");
            }
        });
    }


}
