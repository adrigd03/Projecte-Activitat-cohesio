
<!-- Paras Navlani -->
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<link rel="stylesheet" href="../Estils/estils.css">
	<title>Inici</title>
</head>
<body>
 
<!--En aquest div guardarem els articles -->
<?php require_once("../Vista/navbar.php"); ?>
  <!--Opcions -->
<div class="contenidor">
		<h1>Grups</h1>
    <?php foreach ($grup as $grups): ?>
    <div class="grup">
    <div class="card-body">
    <h4 class="card-title"><?php echo $grup['nom'];?> </h4>  
    </div>
    </div>
    <?php endforeach; ?>

  </div>
  <br>

  
</div>
</body>
</html>




