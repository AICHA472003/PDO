<?php
require "conexion.php";

$id = $_GET['id'];

$stmt = $pdo->prepare("SELECT * FROM produit WHERE id = ?");
$stmt->execute([$id]);

$produit = $stmt->fetch(PDO::FETCH_ASSOC);
?>

<h2>Détails du produit</h2>

<p><strong>Nom :</strong> <?= $produit['nom'] ?></p>
<p><strong>Prix :</strong> <?= $produit['prix'] ?> DH</p>
<p><strong>Description :</strong> <?= $produit['description'] ?></p>
<p><strong>Catégorie :</strong> <?= $produit['categorie'] ?></p>
