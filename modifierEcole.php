<?php 
require('connexion.php');
$id=$_GET['id'];
$code_gresa=$_POST['code_gresa'];
$code_statistique=$_POST['code_statistique'];
$nom_etab=$_POST['nom_etab'];
$nbr_sous_etab=$_POST['nbr_sous_etab'];
$nbr_inst=$_POST['nbr_inst'];
$nbr_etud=$_POST['nbr_etud'];
$adresse_etab=$_POST['adresse_etab'];
$req="update etablissement set code_gresa='$code_gresa' ,code_statistique='$code_statistique' ,nom_etab='$nom_etab' ,nbr_sous_etab='$nbr_sous_etab' ,nbr_inst='$nbr_inst' ,nbr_etud='$nbr_etud' ,adresse_etab='$adresse_etab' where id=$id ";
$connexion->exec($req);

//header("Location: listerEcoleForm.php");
print("<script type=\"text/javascript\">setTimeout('location=(\"listerEcoleForm.php\")' ,1000);</script>");
?>
