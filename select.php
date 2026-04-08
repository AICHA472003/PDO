<?php
require 'connexion.php';
$sql="SELECT*FROM users";
$resultat=$pdo->query($sql);
$users=$resultat->fetchALL(PDO::FETCH_ASSOC);

  foreach($users as $user){
    echo"nom:".$user["nom"]."email:".$user["email"]."<br>";
  }
 ?>