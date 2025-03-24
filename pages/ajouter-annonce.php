<?php
include '../includes/db.php';
include '../includes/header.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $titre = $_POST['titre'];
    $description = $_POST['description'];
    $prix = $_POST['prix'];

    $stmt = $pdo->prepare("INSERT INTO annonces (titre, description, prix) VALUES (?, ?, ?)");
    $stmt->execute([$titre, $description, $prix]);

    echo "Annonce créée avec succès !";
}
?>

<form method="post">
    <input type="text" name="titre" placeholder="Titre" required>
    <textarea name="description" placeholder="Description" required></textarea>
    <input type="number" step="0.01" name="prix" placeholder="Prix" required>
    <button type="submit">Créer</button>
</form>

<?php include '../includes/footer.php'; ?>
