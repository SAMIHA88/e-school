<?php
session_start();

if (isset($_POST["login"]))
{
$maConn = new mysqli("localhost","root","","gestion_ecole");
$resultat = $maConn->query("SELECT login, mdp FROM connexion where login='".$_POST["login"]."'");
if($ligne=mysqli_fetch_assoc($resultat)){ // nbre des lignes != 0
if($ligne["mdp"]==($_POST["mdp"]))
{	
if($ligne["etat"]=='0') echo "Compte non activé!";
else {
$_SESSION['login']='OK';
$_SESSION['login']=$ligne["login"];
$_SESSION['mdp']=$ligne["mdp"];
header('Location:MenuGestion.php');
}
}
else
	echo "Mot de passe incorrect !";

} else echo "login incorrect !";

}
 ?>