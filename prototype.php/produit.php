<?php
require "conexion.php";

if (isset($_POST['ajouter'])) {
    $nom = $_POST['nom'];
    $prix = $_POST['prix'];
    $description = $_POST['description'];
    $categorie = $_POST['categorie'];

    $stmt = $pdo->prepare("INSERT INTO produit (nom, prix, description, categorie) VALUES (?, ?, ?, ?)");
    $stmt->execute([$nom, $prix, $description, $categorie]);

    echo "Produit ajouté avec succès";
}
?>

<h2>Ajouter un produit</h2>

<form method="POST">
    Nom: <input type="text" name="nom" required><br><br>
    Prix: <input type="number" step="0.01" name="prix" required><br><br>
    Description: <textarea name="description"></textarea><br><br>
    Catégorie: <input type="text" name="categorie"><br><br>

    <button name="ajouter">Ajouter</button>
</form>