<?php
require "connexion.php";

// ajouter
if (isset($_POST["ajouter"])) {
    $nom = $_POST["nom"];
    $email = $_POST["email"];

    $stmt = $pdo->prepare("INSERT INTO users (nom, email) VALUES (?, ?)");
    $stmt->execute([$nom, $email]);
}

// afficher
$users = $pdo->query("SELECT * FROM users")->fetchAll(PDO::FETCH_ASSOC);
?>

<table border="1">
<tr>
    <th>ID</th>
    <th>Nom</th>
    <th>Email</th>
    <th>Actions</th>
</tr>

<?php foreach ($users as $user): ?>
<tr>
    <td><?= $user['id'] ?></td>
    <td><?= $user['nom'] ?></td>
    <td><?= $user['email'] ?></td>
    <td>
        <!-- modifier -->
        <a href="modifier.php?id=<?= $user['id'] ?>">Modifier</a>

        <!-- supprimer -->
        <a href="supprimer.php?id=<?= $user['id'] ?>" onclick="return confirm('Supprimer ?')">Supprimer</a>
    </td>
</tr>
<?php endforeach; ?>
</table>