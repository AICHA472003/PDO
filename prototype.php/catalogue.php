<?php
require "conexion.php";

$produits = $pdo->query("SELECT * FROM produit")->fetchAll(PDO::FETCH_ASSOC);
?>

<h2>Catalogue des produits</h2>

<?php foreach ($produits as $p): ?>
<div style="border:1px solid black; padding:10px; margin:10px; width:200px;">
    <h3><?= $p['nom'] ?></h3>
    <p>Prix : <?= $p['prix'] ?> DH</p>
    <a href="details.php?id=<?= $p['id'] ?>">Détails</a>
</div>
<?php endforeach; ?>