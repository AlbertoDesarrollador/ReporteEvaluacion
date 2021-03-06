<?php

    // Cargamos el archivo autoload para poder cargar las clases
    // de la API GTMetrix
    require __DIR__ . '/vendor/autoload.php';   
    use Entrecore\GTMetrixClient\GTMetrixClient;
    use Entrecore\GTMetrixClient\GTMetrixTest;

    // // Generamos un nuevo cliente e iniciamos sesión 
    // $client = new GTMetrixClient();
    // $client->setUsername('albertoprado.desarrollador@gmail.com');
    // $client->setAPIKey('65358e7d9a9d5b044519477d29523938');
    // $client->getLocations();
    // $client->getBrowsers();

    // // Iniciamos la prueba y esperamos recibir el resultado 
    // $test = $client->startTest($_POST["pagina"]);
    //     while ($test->getState() != GTMetrixTest::STATE_COMPLETED &&
    //     $test->getState() != GTMetrixTest::STATE_ERROR) {
    //     $client->getTestStatus($test);
    //     sleep(1);
    // }

    // // Enviamos la información del reporte
    // $evaluacion = array("direccion" => $_POST["pagina"], 
    //                      "id" => $test->getId(),
    //                      "score" => $test->getPagespeedScore(), 
    //                      "size" => $test->getHtmlBytes(), 
    //                      "time" => $test->getHtmlLoadTime(),
    //                      "ySlow" => $test->getYslowScore(),
    //                      "report" => $test->getReportUrl(),
    //                      "cargaHTML" => $test->getHtmlLoadTime(),
    //                      "pageElements" => $test->getPageElements(),
    //                      "fullyLoaded" => $test->getFullyLoadedTime()
    //                     );
    // echo json_encode($evaluacion);

    $evaluacion = array("direccion" => "www.google.com.mx",
                        "id" => "9d7axA",
                        "score" => 93,
                        "size" => 94847,
                        "time" => 348,
                        "yslow" => 83,
                        "report" => '<a href="www.gtmetrix.com/api/0a39f.pdf"> GTMetrix </a>',
                        "cargaHTML" => 84837, 
                        "pageElements" => 489,
                        "fullyLoaded" => 3821
    );
    echo json_encode($evaluacion);

?>

