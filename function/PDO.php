<?php


function getPdo(): PDO
{
  try {
   
    $pdo = new PDO(
      "mysql:host=localhost;dbname=partiel",
      "news",
      "I3wsFTpIOQkDAk4l"
    );
    return $pdo;
  } catch(PDOException $ex) {
   
    exit("Erreur lors de la connexion à la base de données");
  }
}
