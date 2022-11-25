
<?php
$dsn="mysql:host=localhost;dbname=gestion_ecole";
$utilisateur='root';
$motdepasse='';
try{

$connexion=new PDO($dsn,$utilisateur,$motdepasse);
}catch(PDOExeption $e){
echo $e->getMessage();
}
?>