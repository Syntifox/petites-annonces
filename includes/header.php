<?php session_start(); ?>
<header>
    <h1>Petites Annonces</h1>
    <nav>
        <ul>
            <li><a href="/index.php">Accueil</a></li>
            <?php if(isset($_SESSION['user_id'])): ?>
                <li><a href="/pages/create.php">Créer une annonce</a></li>
                <li><a href="/pages/logout.php">Déconnexion</a></li>
            <?php else: ?>
                <li><a href="/pages/login.php">Connexion</a></li>
                <li><a href="/pages/register.php">Inscription</a></li>
            <?php endif; ?>
        </ul>
    </nav>
</header>
