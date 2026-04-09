<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
           <body>
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
        $email= $_POST["email"];
if(empty($nom)||empty($email)){
    echo"erreur";
                }else{

echo"Bienvenue$nom,ton email est $email";
}
    }
    ?>
</body>
</html>




