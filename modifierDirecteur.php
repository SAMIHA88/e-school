
<?php
    
    $id=isset($_GET['id'])?$_GET['id']:0;
    $maconnexion = new mysqli("localhost","root","","gestion_ecole");
    $resultat=$maconnexion->query("SELECT * FROM directeur WHERE id=$id");
    $ligne=mysqli_fetch_assoc($resultat);

?>
<div class="container">
        <form method="POST" class="appointment-form" id="appointment-form" >
            <h2> Modifier employé</h2>
            <div class="form-group-1">
            <div class="form-group">
                             <label for="id">id: <?php echo $id ?></label>
                            <input type="hidden" name="id" class="form-control" value="<?php echo $id ?>"/>
                        </div>
  <table border=1 align="center">
  
    <tr> <td>N° Somme:</td><td><input type="text" name="num_somme" id="num_somme" placeholder="<?php echo $ligne["num_somme"]; ?>" required /></td></tr>
    <tr> <td>Nom</td><td><input type="text" name="nom_dir" id="nom_dir" placeholder="<?php echo $ligne["nom_dir"]; ?>" required /></td></tr>
    <tr> <td>Prenom :</td><td><input type="text" name="prenom_dir" id="prenom_dir" placeholder="<?php echo $ligne["prenom_dir"]; ?>" required /></td></tr>
            </div>
              <td><tr> <td><input type="submit" name="bok" id="bok" class="submit" value="Modifier" /></td></tr>
            </div>
        </form>
    </div>

</div> 

<?php
 if(isset($_POST['bok']))
 { echo "Bien modifié";
  $id=$_POST['id'];
  $num_somme=$_POST['num_somme'];
  $nom_dir=$_POST['nom_dir'];
  $prenom_dir=$_POST['prenom_dir'];

  $maConn = new mysqli("localhost","root","","gestion_ecole");

      $result = $maConn->query("UPDATE directeur SET num_somme='".$num_somme."',nom_dir='".$nom_dir."',prenom_dir='".$prenom_dir."' WHERE id='".$id."'");
    

 }


?>


