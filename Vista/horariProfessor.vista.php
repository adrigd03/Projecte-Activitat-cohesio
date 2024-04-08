<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">

    <link rel="stylesheet" href="../Estils/table.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
  <script src="https://code.jquery.com/jquery-3.6.3.min.js"></script>
  <link rel="stylesheet" href="../Estils/estils.css">
	<title>Horari Professor</title>
  <link rel="stylesheet" href="../Estils/mapa.css">
  <script type="module" src="../Vista/horariAlumne.js"></script>
  <script defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDZN-QdRh6ZIErT1L2E29l9AOng1fNphZY&callback=crearMapa"></script>
</head>
<body>
<?php require_once("../Vista/navbar.php");
echo("Num grups: ".count($grups)."<br>");
echo("Num proves: ".count($proves)."<br>");
if((count($grups)/2)!=count($proves)){
  echo("No es pot crear horari <br> Tenen que haver-hi la meitat de provas que de grups.");
}
else{
$html="<table id='tabla'><tr><th></th>";
for ($i=0; $i < count($proves) ; $i++){
  $html.="<th>".$proves[$i]["professor"]." (".$proves[$i]["nom"].") "."</th>";
}
$html.="</tr>";
$hora="16:00";
for ($i=0; $i < count($grups)/2 ; $i++){
  $html.="<tr><td>".$hora."</td>";
  $horaArray=explode(":",$hora);
  if($horaArray[1]=="45"){
    $horaArray[1]="00";
    $horaArray[0]=strval(intval($horaArray[0])+1)."";
  }else{
    $horaArray[1]=strval(intval($horaArray[1])+15)."";
  }
  $hora=implode(":", $horaArray);
  for ($j=0; $j <count($grups)/2 ; $j++) { 
    $html.="<td>".$grups1[$j]["nom"]." vs ".$grups2[$j]["nom"]."</td>";
  }
  $html.="</tr>";
  $grup1=array_shift($grups1);
  array_push($grups1,$grup1);

  $grup2=array_pop($grups2);
  array_unshift($grups2,$grup2);

}

$html.="</table>";
echo($html);
}

?>

<table hidden>
    <tbody id=ub>
      <?php foreach ($proves as $key => $value) : ?>
        <tr>
          <td><?= $value["nom"]; ?></td>
          <td><?= $value["lat"]; ?></td>
          <td><?= $value["lng"]; ?></td>
          <td><?= $value["lloc"]; ?></td>
        </tr>
      <?php endforeach; ?>
    </tbody>
  </table>
  <div id="mapa" class="mapa" style="margin: auto; margin-top: 4rem;"></div>

</body>
</html>