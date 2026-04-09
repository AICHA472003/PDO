<?php
require'connexion.php';
$sql="SELECT*FROM users";
$resultat=$pdo->query($sql);
$users = $resultat->fetchALL(PDO::FETCH_ASSOC);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php foreach($users as $user): ?>
         <div class="card">
    <p>id<?=$user["id"]?></p>
    <p>nom<?=$user["nom"]?></p>
    <p>email<?=$user["email"]?></p>
    <a href="delet.php?id=<?=$user["id"]?>">delet</a>
  </div>
    <?php endforeach;?>

    
</body>
</html>