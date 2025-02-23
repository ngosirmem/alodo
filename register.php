<?php
    // Inclure le fichier de configuration de la base de données
    include "config.php";

    // Vérifier si le formulaire a été soumis
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Récupérer les données du formulaire
        $nom = $_POST["nom"];
        $email = $_POST["email"];
        $password = password_hash($_POST["password"], PASSWORD_DEFAULT); // Hasher le mot de passe
        $role = $_POST["role"];

        // Préparer la requête SQL pour insérer l'utilisateur
        $sql = "INSERT INTO users (nom, email, password, role) VALUES ('$nom', '$email', '$password', '$role')";
        
        // Exécuter la requête et vérifier si elle a réussi
        if ($conn->query($sql) === TRUE) {
            echo "Inscription réussie ! <a href='login.php'>Connectez-vous ici</a>";
        } else {
            echo "Erreur : " . $conn->error;
        }
    }
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Inscription</title>
    <link rel="stylesheet" href="css/styles.css">
</head>
<body>
    <h1>Inscription</h1>
    <form method="post">
        <input type="text" name="nom" placeholder="Nom" required><br>
        <input type="email" name="email" placeholder="Email" required><br>
        <input type="password" name="password" placeholder="Mot de passe" required><br>
        <select name="role" required>
            <option value="client">Client</option>
            <option value="prestataire">Prestataire</option>
        </select><br>
        <button type="submit">S'inscrire</button>
    </form>
    <p>Déjà inscrit ? <a href="login.php">Connectez-vous ici</a></p>
</body>
</html>