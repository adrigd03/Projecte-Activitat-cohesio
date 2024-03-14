<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
  <link rel="stylesheet" href="../Estils/estils.css">
  <link rel="stylesheet" href="../Estils/table.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="js/jquery.min.js"></script>
  <script src="js/popper.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="https://code.jquery.com/jquery-3.6.3.min.js"></script>

  <link rel="stylesheet" href="../Estils/mapa.css">
  <script type="module" src="../Vista/horariAlumne.js"></script>
  <script defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDZN-QdRh6ZIErT1L2E29l9AOng1fNphZY&callback=crearMapa"></script>
  <title>Horari Professor</title>
</head>

<body>
  <?php require_once("../Vista/navbar.php");
  echo ("Num grups: " . count($grups) . "<br>");
  echo ("Num proves: " . count($proves) . "<br>");
  if ((count($grups) / 2) != count($proves)) {
    echo ("No se puede crear un horario <br> Para crearlo tiene que haber la mitad de pruebas que de grupos.");
  } else {
    $html = "<table id='tabla'><tr><th></th>";
    for ($i = 0; $i < count($grups); $i++) {
      $html .= "<th>" . $grups[$i]["nom"] . "</th>";
    }
    $html .= "</tr>";
    $hora = "16:00";
    for ($i = 0; $i < count($grups) / 2; $i++) {
      $html .= "<tr><td>" . $hora . "</td>";
      $horaArray = explode(":", $hora);
      if ($horaArray[1] == "45") {
        $horaArray[1] = "00";
        $horaArray[0] = strval(intval($horaArray[0]) + 1) . "";
      } else {
        $horaArray[1] = strval(intval($horaArray[1]) + 15) . "";
      }
      $hora = implode(":", $horaArray);



      for ($j = 0; $j < count($proves); $j++) {
        $html .= "<td>" . $proves[$j]["nom"] . "</td>";
      }
      for ($j = 0; $j < count($proves2); $j++) {
        $html .= "<td>" . $proves2[$j]["nom"] . "</td>";
      }
      $html .= "</tr>";
      $prova = array_pop($proves);
      array_unshift($proves, $prova);

      $prova = array_shift($proves2);
      array_push($proves2, $prova);
    }

    $html .= "</table>";
    echo ($html);
  }

  ?>
  <div hidden id="mapa" class="mapa"></div>
</body>

</html>