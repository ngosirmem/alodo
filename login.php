<?php
  session_start();
  include "config.php";

  if ($_SERVER["REQUEST_METHOD"] == "POST") {
      $email = $_POST["email"];
      $password = $_POST["password"];

      // Vérifier les informations de connexion
      $sql = "SELECT * FROM users WHERE email='$email'";
      $result = $conn->query($sql);
      
      if ($result->num_rows == 1) {
          $row = $result->fetch_assoc();
          if (password_verify($password, $row["password"])) {
              // Stocker les informations de l'utilisateur en session
              $_SESSION["user_id"] = $row["id"];
              $_SESSION["nom"] = $row["nom"];
              $_SESSION["role"] = $row["role"];

              // Rediriger en fonction du rôle
              if ($row["role"] == "client") {
                  header("Location: dashboard_client.php");
              } elseif ($row["role"] == "prestataire") {
                  header("Location: dashboard_prestataire.php");
              } elseif ($row["role"] == "administrateur") {
                  header("Location: dashboard_admin.php");
              }
          } else {
              echo "Mot de passe incorrect.";
          }
      } else {
          echo "Email non trouvé.";
      }
  }
  ?>

  <!DOCTYPE html>
  <html lang="fr">
  <head>
      <meta charset="UTF-8">
      <title>Connexion</title>
      <link rel="stylesheet" href="css/styles.css">
  </head>
  <body>
      <h1>Connexion</h1>
      <form method="post">
          <input type="email" name="email" placeholder="Email" required><br>
          <input type="password" name="password" placeholder="Mot de passe" required><br>
          <button type="submit">Se connecter</button>
      </form>
      <p>Pas encore inscrit ? <a href="register.php">Inscrivez-vous ici</a></p>
  </body>
</html>