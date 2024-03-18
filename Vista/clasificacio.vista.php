<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  <link rel="stylesheet" href="../Estils/estils.css">
  <title>Document</title>
  <script src="https://code.jquery.com/jquery-3.6.3.min.js"></script>
  <script defer src="../Vista/clasificacio.js"></script>
</head>

<body>
  <?php require_once("../Vista/navbar.php");
  //Muestra todas clases en forma de enlace que manda a una pagina que muestra los alumnos de esa clase.
  ?>


  <div class="contenidor">
    <h1>Classificació General</h1>
    <div class="container-fluid text-center justify-content-center">
      <div class="row row-cols-1 row-cols-md-2 text-center justify-content-center">
        <?php
        for ($i = 0; $i < count($grups); $i++) {
          echo ("<div class='card grup text-center mx-2 my-2' id='".($grups[$i]["id"])."'> <div class='card-body'> <h4 class='card-title' style='display:inline' id='".($grups[$i]["imatge"])."'>" . ($i + 1) . ". </h4><h4 style='display:inline'>". ($grups[$i]["nom"]) ."</h4><h5> Victories: " . ($grups[$i]["victories"]) . "</h5><hr><button class='diploma btn btn-dark'>Generar Diplomes</button></div></div>");
        }
        ?>
      </div>
    </div>
  </div>
  </div>
  <br>
</body>

</html>