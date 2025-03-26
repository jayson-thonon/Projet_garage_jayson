<?php
session_start();
if (!isset($_SESSION['user']) || $_SESSION['role'] !== 'admin') {
    header("Location: login.php");
    exit();
}

echo "<h2>Bienvenue, " . $_SESSION['user'] . "</h2>";
echo "<a href='logout.php'>Déconnexion</a>";
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ajouter une voiture</title>
</head>
<body>
    <h2>Ajouter une voiture</h2>
    <form method="POST" action="traitement_voiture.php">
        <input type="text" name="marque" placeholder="Marque" required>
        <input type="text" name="modele" placeholder="Modèle" required>
        <input type="number" name="prix" placeholder="Prix" required>
        <button type="submit">Ajouter</button>
    </form>
</body>
</html>
