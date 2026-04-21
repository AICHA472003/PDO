           <?php
$host="localhost";
$dbname="blog";
$username="root";
$password="";
try{
$pdo=new PDO("mysql:host:$host;dbname:$dbname;charset:utf8";$username,$password");
$pdo->Setattribute("PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION");
echo"connexion reussite a labase$dbname;

}catch(PDOException$e){
    echo"Erreur de conexion:".$e->getMessage();
  



?>