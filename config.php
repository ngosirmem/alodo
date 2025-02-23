<?php
  // config.php
  $host = "localhost";
  $user = "root";
  $password = "";
  $dbname = "alodo";

  // Connexion à la base de données
  $conn = new mysqli($host, $user, $password, $dbname);

  // Vérifier la connexion
  if ($conn->connect_error) {
      die("Erreur de connexion : " . $conn->connect_error);
  }
?>