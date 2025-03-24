<?php
include 'includes/db.php'; // Connexion à la base de données

// Récupère les 5 dernières annonces
$query = $pdo->query("SELECT * FROM annonces ORDER BY date_creation DESC LIMIT 5");
$annonces = $query->fetchAll(PDO::FETCH_ASSOC);
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Accueil - Petites Annonces</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <header>
        <div class="navbar">
            <a href="index.php" class="logo">Lemauvaiscoin</a>
            <nav>
                <ul>
                    <li><a href="/petites-annonces/pages/connexion.php">Se connecter</a></li>
                    <li><a href="/petites-annonces/pages/inscription.php">S'inscrire</a></li>
                    <li><a href="/petites-annonces/pages/annonces.php">Voir les Annonces</a></li>
                </ul>
            </nav>
        </div>
    </header>

    <main>
        <section class="hero">
            <h1>Bienvenue sur Lemauvaiscoin</h1>
            <p>La plateforme pour vos mauvaises annonces.</p>
        </section>

        <section class="recent-announcements">
            <h2>Dernières annonces</h2>
            <div class="annonces-list">
                <?php
                // Récupération des annonces (les 5 dernières)
                $query = $pdo->query("SELECT * FROM annonces ORDER BY date_creation DESC LIMIT 5");
                $annonces = $query->fetchAll();

                if (count($annonces) > 0):
                    foreach ($annonces as $annonce):
                ?>
                        <div class="annonce-card">
                            <img src="uploads/<?= htmlspecialchars($annonce['photo']) ?>" alt="Image de l'annonce">
                            <h3><?= htmlspecialchars($annonce['title']) ?></h3>
                            <p>Prix: <?= number_format($annonce['price'], 2, ',', ' ') ?> €</p>
                            <a href="annonce-detail.php?id=<?= $annonce['id'] ?>">Voir les détails</a>
                        </div>
                <?php
                    endforeach;
                else:
                    echo "<p>Aucune annonce disponible.</p>";
                endif;
                ?>
            </div>
        </section>
    </main>

    <footer>
        <p>&copy; 2025 Petites Annonces. Tous droits réservés.</p>
    </footer>
</body>
</html>
