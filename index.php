<?php
require_once "PDO.php";
$query = "SELECT * FROM voiture";
$req=$db->query($query);
$req = $req->fetchAll(PDO::FETCH_ASSOC);

?>
<!DOCTYPE html>


<html>
    <head>
        <meta charset="utf-8" />
        <title><?= $title ?></title>
        <link href="style.css" rel="stylesheet" />
		
<?php
		
		$title = "Voiture";
		require_once "layout..php";
?>


		
		
    </head>
        
    <body>
    <!--  Formulaire pour les voitures  -->
        <form>
		<?php
		foreach($req as $car ) { ?>
		
  <div class="form-group">
    <label for="exampleInputVoiture1">Voiture</label>
    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Voiture">
    <small id="emailHelp" class="form-text text-muted"></small>
  </div>
  <div class="form-group">
    <label for="exampleInputNombreDeKilometre1">Nombre de kilometre </label>
    <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Nombre de kilometre">
  </div>
  <div class="form-check">
	<label for="exampleInputAnnee1">L'année</label>
    <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Annee">
  </div>
		<?php } ?>
  
    </body>
	<footer>
	</footer>
</html>