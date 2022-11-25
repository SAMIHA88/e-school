<?php
 if(isset($_POST['submit']))
 { 
  
  $id=$_POST['id'];
  $code_massar=$_POST['code_massar'];
  $nom_etud=$_POST['nom_etud'];
  $prenom_etud=$_POST['prenom_etud'];
  $responsable=$_POST['responsable'];
  $etat=$_POST['etat'];
  $maConn = new mysqli("localhost","root","","gestion_ecole");

$result = $maConn->query("UPDATE etudiant SET code_massar='".$code_massar."',nom_etud='".$nom_etud."',prenom_etud='".$prenom_etud."' , responsable='". $responsable."', etat='". $etat."' where id='". $id."' " );
 }    
