<?php
    
    require __DIR__ . '/vendor/autoload.php';   
    use Entrecore\GTMetrixClient\GTMetrixClient;
    use Entrecore\GTMetrixClient\GTMetrixTest;
    session_start();

    print "Evaluando " . $_GET["pagina"];
    $client = new GTMetrixClient();
    $client->setUsername('albertoprado.desarrollador@gmail.com');
    $client->setAPIKey('65358e7d9a9d5b044519477d29523938');
    $client->getLocations();
    $client->getBrowsers();
    $test = $client->startTest($_GET["pagina"]);
        while ($test->getState() != GTMetrixTest::STATE_COMPLETED &&
        $test->getState() != GTMetrixTest::STATE_ERROR) {
        $client->getTestStatus($test);
        sleep(1);
    }

    // Almacenamos información
    $_SESSION["test"] = True;
    $_SESSION["time"] = $test->getFullyLoadedTime();
    $_SESSION["size"] = $test->getPageBytes();
    $_SESSION["score"] = $test->getPagespeedScore();
    $_SESSION["report"] = $test->getReportUrl();
    header("Location: index.php");

?>
