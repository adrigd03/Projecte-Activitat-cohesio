<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">

  <link rel="stylesheet" href="../Estils/table.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  <script src="../js/jquery.min.js"></script>
  <link rel="stylesheet" href="../Estils/estils.css">
  <script src="../js/popper.min.js"></script>
  <script src="../js/bootstrap.min.js"></script>
  <script src="https://code.jquery.com/jquery-3.6.3.min.js"></script>
  <script defer src="../Vista/horaActivitat.js"></script>
  <title>Horari Professor</title>
</head>

<body>
  <?php require_once("../Vista/navbar.php");

  if ((count($grups) / 2) != count($proves)) {
    echo ("Num grups: " . count($grups) . "<br>");
    echo ("Num proves: " . count($proves) . "<br>");
    echo ("No se puede crear un horario <br> Para crearlo tiene que haber la mitad de pruebas que de grupos.");
  } else {
    $html = "<table hidden id='tabla'><tr><th></th>";
    for ($i = 0; $i < count($proves); $i++) {
      $html .= "<th colspan=2>" . $proves[$i]["professor"] . " (" . $proves[$i]["nom"] . ") " . "</th>";
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
      for ($j = 0; $j < count($grups) / 2; $j++) {
        $html .= "<td>" . $grups1[$j]["nom"] . "</td><td>" . $grups2[$j]["nom"] . "</td>";
      }
      $html .= "</tr>";
      $grup1 = array_shift($grups1);
      array_push($grups1, $grup1);

      $grup2 = array_pop($grups2);
      array_unshift($grups2, $grup2);
    }

    $html .= "</table>";
    echo ($html);
  }
  ?>
  <div class="container">

    <div class="card mt-5 text-center" style="width: 30rem;margin:auto;">
      <div class="card-body text-center">
        <p class="card-text text-center">
        <form>
          <label for="activitat">Activitat</label>
          <select id="activitat"></select>
          <label for="hora">Hora</label>
          <select id="hora"></select>
          <label for="hora">Guanyador</label>
          <div id="grup1"></div>
          <div id="grup2"></div>
          <button class="btn btn-primary" type="submit" id="enviar">Enviar</button>
        </form>
        </p>
      </div>
    </div>


  </div>
</body>

</html>