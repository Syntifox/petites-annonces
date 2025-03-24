<?php
// Démarrage de la session pour récupérer l'utilisateur connecté
session_start();

// Vérifier si l'utilisateur est connecté, sinon rediriger vers la page de connexion
if (!isset($_SESSION['user_id'])) {
    header('Location: auth/connexion.php'); // Redirige vers la page de connexion
    exit();
}

// Connexion à la base de données
require_once('db_connection.php'); // Assure-toi d'inclure ta connexion à la base de données

// Récupérer les informations de l'utilisateur à partir de la session
$user_id = $_SESSION['user_id'];

// Récupérer les informations de l'utilisateur depuis la base de données
$query = "SELECT * FROM utilisateurs WHERE id = :user_id";
$stmt = $pdo->prepare($query);
$stmt->bindParam(':user_id', $user_id, PDO::PARAM_INT);
$stmt->execute();

$user = $stmt->fetch();

// Si l'utilisateur n'existe pas, rediriger vers la page d'accueil
if (!$user) {
    header('Location: index.php');
    exit();
}
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profil de l'utilisateur</title>
    <link rel="stylesheet" href="css/style.css"> <!-- Assure-toi que ton CSS est bien lié -->
</head>
<body>
    <!-- Menu de navigation -->
    <header>
        <nav>
            <ul>
                <li><a href="index.php">Accueil</a></li>
                <li><a href="profil.php">Mon profil</a></li>
                <li><a href="auth/deconnexion.php">Se déconnecter</a></li>
            </ul>
        </nav>
    </header>

    <div class="container">
        <h1>Bienvenue, <?= htmlspecialchars($user['nom']) ?> !</h1>

        <div class="profil-info">
            <h2>Informations de profil</h2>
            <p><strong>Nom :</strong> <?= htmlspecialchars($user['nom']) ?></p>
            <p><strong>Email :</strong> <?= htmlspecialchars($user['email']) ?></p>

            <!-- Ajouter un formulaire pour modifier le profil -->
            <h3>Modifier mon profil</h3>
            <form action="modifier_profil.php" method="POST">
                <label for="nom">Nom :</label>
                <input type="text" id="nom" name="nom" value="<?= htmlspecialchars($user['nom']) ?>" required><br>

                <label for="email">Email :</label>
                <input type="email" id="email" name="email" value="<?= htmlspecialchars($user['email']) ?>" required><br>

                <input type="submit" value="Mettre à jour">
            </form>
        </div>
    </div>
</body>
</html>
