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
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Connexion - Alodo</title>
    <!-- Police Poppins et Font Awesome -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <!-- Styles CSS -->
    <style>
        body {
            font-family: 'Poppins', sans-serif;
            background-color: #f8f9fa;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }

        .login-container {
            background-color: #ffffff;
            padding: 2rem;
            border-radius: 10px;
            box-shadow: 0 4px 15px rgba(0, 0, 0, 0.1);
            width: 100%;
            max-width: 400px;
            text-align: center;
            animation: fadeIn 0.5s ease-in-out;
        }

        @keyframes fadeIn {
            from { opacity: 0; transform: translateY(-20px); }
            to { opacity: 1; transform: translateY(0); }
        }

        h1 {
            color: #0077B6;
            margin-bottom: 1.5rem;
            font-size: 2rem;
        }

        .form-group {
            margin-bottom: 1.5rem;
            text-align: left;
        }

        .form-group label {
            display: block;
            margin-bottom: 0.5rem;
            color: #333333;
            font-weight: 600;
        }

        .form-group input {
            width: 100%;
            padding: 0.75rem;
            border: 1px solid #dddddd;
            border-radius: 5px;
            font-size: 1rem;
            transition: border-color 0.3s ease;
        }

        .form-group input:focus {
            border-color: #0077B6;
            outline: none;
        }

        .btn-login {
            background-color: #FF8C00;
            color: #ffffff;
            border: none;
            padding: 0.75rem 1.5rem;
            border-radius: 5px;
            font-size: 1rem;
            cursor: pointer;
            transition: background-color 0.3s ease;
            width: 100%;
        }

        .btn-login:hover {
            background-color: #FFA500;
        }

        .register-link {
            margin-top: 1rem;
            color: #555555;
        }

        .register-link a {
            color: #0077B6;
            text-decoration: none;
            font-weight: 600;
        }

        .register-link a:hover {
            text-decoration: underline;
        }

        .error-message {
            color: #ff0000;
            margin-bottom: 1rem;
            font-size: 0.9rem;
        }
    </style>
</head>
<body>
    <div class="login-container">
        <h1>Connexion</h1>
        <?php if (isset($error)): ?>
            <div class="error-message"><?php echo $error; ?></div>
        <?php endif; ?>
        <form method="post">
            <div class="form-group">
                <label for="email">Email</label>
                <input type="email" id="email" name="email" placeholder="Entrez votre email" required>
            </div>
            <div class="form-group">
                <label for="password">Mot de passe</label>
                <input type="password" id="password" name="password" placeholder="Entrez votre mot de passe" required>
            </div>
            <button type="submit" class="btn-login">Se connecter</button>
        </form>
        <p class="register-link">Pas encore inscrit ? <a href="register.php">Inscrivez-vous ici</a></p>
    </div>
</body>
</html>