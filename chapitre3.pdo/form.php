<?php

require'connexion.php';
$sql="insert into users(nom,email)
values(:nom,:email)";
$resultat=$pdo->prepare($sql);
?>
<!DOCTYPE html>
<html lang="en">
<head>
          <body>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
            </head>
        <form method="POST">
            <label>nom</label>
        <input type="text" name="nom">
                  <br>
        <label>email</label>      
    <input type="email" name="email">
                 <br>
<button type="submit" name="envoyer" >envoyer</button>
            </form>
<?php
if(isset($_POST["envoyer"])){
    $nom=$_POST["nom"];
    $email=$_POST["email"];
    if(empty($nom)||empty($email)){
        echo"erreur";

    }else{
$resultat->execute(["nom"=>$nom,"email"=>$email]);
echo"bienvenue";
    }
}
?>



   
</body>
</html>




