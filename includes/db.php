<?php
// db.php - Connexion à la base de données
$host = 'localhost';
$dbname = 'petites_annonces';
$username = 'root'; // Modifier selon votre config MAMP
$password = 'root'; // Modifier selon votre config MAMP

try {
    $pdo = new PDO("mysql:host=$host;dbname=$dbname;charset=utf8", $username, $password);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    die("Erreur de connexion : " . $e->getMessage());
}
?>