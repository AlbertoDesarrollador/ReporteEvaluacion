<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title> Metricas </title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>
    <h1> Evalua tu pagina </h1>
    
    <form action="evaluar.php" method="get">
        <input type="text" id="pagina" name="pagina">
        <input type="submit" value="Evaluar">
    </form>

    <?php
        if (session_status() == PHP_SESSION_NONE) {
            session_start();
        }
        if(isset($_SESSION["prueba"])) {
            print "Tiempo de carga(ms): " . $_SESSION["tiempo"] . "<br>";
            print "Tamaño de la pagina: " . $_SESSION["size"] . "<br>";
            print "Puntuación: " . $_SESSION["score"] . "<br>";
            print "Report completo: <a href='" . $_SESSION["report"] . "'>" . $_SESSION["report"] . "</a>";
        }
    ?>

</body>
</html>