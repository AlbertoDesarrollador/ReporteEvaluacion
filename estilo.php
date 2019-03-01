<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title> Estilo Evaluación </title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="script.js"></script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container border p-3" id="contenedor">
        <h1> Conoce el desempeño de tu pagina web </h1>
        <p> Lorem ipsum dolor, sit amet consectetur adipisicing elit. Nisi maxime porro aspernatur ad quo adipisci ex quia odit commodi eveniet molestiae tempore soluta voluptas, voluptate animi! Pariatur quo veniam unde? 
        Lorem ipsum, dolor sit amet consectetur adipisicing elit. Dolore voluptatibus eligendi natus, optio excepturi rerum fugit distinctio deserunt quisquam non ut animi, quam voluptate? Fugiat illum dicta suscipit iure facere! </p>
        <form>
            <div class="form-group">
                <label for="pagina"> Dirección: </label>
                <input type="text" id="pagina" name="pagina" value="www.example.com" class="form-control">
            </div>
            <div class="form-group">
                <label for="correo"> Correo electronico: </label>
                <input type="text" id="correo" name="correo" value="correo@example.com" class="form-control">
            </div>
            <input type="button" value="Evaluar" onclick="evaluar()" class="btn btn-primary">
        </form>
  
    </div>

</body>
</html>