<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Annonces</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <header>
        <div class="navbar">
            <a href="index.php" class="logo">Petites Annonces</a>
            <nav>
                <ul>
                    <li><a href="connexion.php">Se connecter</a></li>
                    <li><a href="inscription.php">S'inscrire</a></li>
                    <li><a href="annonces.php">Voir les Annonces</a></li>
                </ul>
            </nav>
        </div>
    </header>

    <main>
        <section class="annonces-list">
            <h2>Toutes les Annonces</h2>
            <div class="annonces-container">
                <!-- Exemple d'annonce -->
                <div class="annonce-card">
                    <h3>Vente de Smartphone</h3>
                    <p>Prix: 250€</p>
                    <a href="annonce-detail.php?id=1">Voir les détails</a>
                </div>
                <!-- Ajoute d'autres annonces dynamiquement -->
            </div>
        </section>
    </main>

    <footer>
        <p>&copy; 2025 Petites Annonces. Tous droits réservés.</p>
    </footer>
</body>
</html>
