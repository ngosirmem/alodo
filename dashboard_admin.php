<?php
  session_start();
  if (!isset($_SESSION["user_id"]) || $_SESSION["role"] != "administrateur") {
      header("Location: login.php");
      exit();
  }

  echo "<h1>Bienvenue, " . $_SESSION["nom"] . " !</h1>";
  echo "<p>Vous êtes connecté en tant qu'administrateur.</p>";
  echo "<a href='logout.php'>Déconnexion</a>";
?>