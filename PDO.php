<?php

try {
	$db = new PDO ('mysql:host=localhost;dbname=voiture','root', '');
}catch(PDOexception $e)
{
	echo "une erreur est survenu";
}

?>