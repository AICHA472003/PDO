<?php
  

  
  $resultat=$pdo->prepare($sql);
  if(isset($id))
    $resultat->execute(["id=>$id"]);
    else{
    echo"Deleted ";
    

    }
    <?php 
    require "conexion.php";
    $id = $GET['id'];
    
    $sql= "DELETE FROM users where id = :id";
    $resultat=$pdo->prepare($sql);
    if (isset($id)){
        $resultat->execute(["id=>$id"]);
    }else{
        echo"you have to click on the link in ". "<a href=select.php>";
    }
?>