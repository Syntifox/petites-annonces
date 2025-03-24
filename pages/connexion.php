<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Connexion</title>
    <link rel="stylesheet" href="css/style.css"> <!-- Assure-toi que le chemin est correct -->
</head>
<body id="connexion-page">
    <header>
        <div class="navbar">
            <a href="index.php" class="logo">MonSite</a>
            <nav>
                <ul>
                    <li><a href="connexion.php">Se connecter</a></li>
                    <li><a href="inscription.php">S'inscrire</a></li>
                </ul>
            </nav>
        </div>
    </header>

    <!-- Contenu de la page de connexion -->
    <div class="connexion-container">
        <h1>Connexion</h1>
        <form action="login_process.php" method="POST">
            <input type="email" name="email" placeholder="Email" required>
            <input type="password" name="password" placeholder="Mot de passe" required>
            <input type="submit" value="Se connecter">
        </form>
    </div>

    <!-- Footer -->
    <footer>
        <p>© 2025 MonSite</p>
    </footer>
</body>
</html>
