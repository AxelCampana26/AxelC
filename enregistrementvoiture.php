<?php

require_once "layout..php"


?>
<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="utf-8">
  <title>Titre de la page</title>
  <link rel="stylesheet" href="style.css">
  <script src="script.js"></script>
  
</head>
<body>
  
  <form class="form-horizontal" role="form" method="post" action="index.php">
	<div class="form-group">
		<label for="name" class="col-sm-2 control-label">Nom de la nouvelle voiture</label>
		<div class="col-sm-10">
			<input type="text" class="form-control" id="name" name="name" placeholder="Voiture" value="">
		</div>
		</div>
		<div class="form-group">
		<label for="name" class="col-sm-2 control-label">Annee de la voiture</label>
		<div class="col-sm-10">
			<input type="text" class="form-control" id="name" name="name" placeholder="annee" value="">
		</div>
		<div class="form-group">
		<label for="name" class="col-sm-2 control-label">Type de voiture</label>
		<div class="col-sm-10">
			<input type="text" class="form-control" id="name" name="name" placeholder="type de Voiture" value="">
		</div>
		<div class="form-group">
		<label for="name" class="col-sm-2 control-label">Kilometre de la voiture</label>
		<div class="col-sm-10">
			<input type="text" class="form-control" id="name" name="name" placeholder="kilomettre" value="">
		</div>
	
</form>
  
  
</body>
</html>