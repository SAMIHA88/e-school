
<?php 
require('connexion.php');
require('Menu.php');
$id=$_GET['id'];
$reqpre=$connexion->prepare("select * from etudiant where id =?");
$reqpre->execute([$id]);
$etudiant=$reqpre->fetch();
$code_massar=$etudiant['code_massar'];
$nom_etud=$etudiant['nom_etud'];
$prenom_etud=$etudiant['prenom_etud'];
$responsable=$etudiant['responsable'];
$etat=$etudiant['etat'];

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>editform</title>
</head>
<body>
<div class="container">
    <form action="listerEtudiantForm.php" method="POST">
        <div class="form-group">
        <label for="code_massar">Code Massar:</label>
        <input type="text" name="code_massar" value=<?php echo $code_massar; ?> class="form-control">
    </div>
        <br>
        <div class="container">
        <label for="nom_etud">Nom:</label>
        <input type="text" name="nom_etud"  value=<?php echo $nom_etud; ?>  class="form-control">
    </div>
        <br>
    <div class="container">
        <label for="prenom_etud">Prénom:</label>
        <input type="text" name="prenom_etud"  value=<?php echo $prenom_etud; ?>  class="form-control">
    </div> 
    <br>
        <div class="container">
        <label for="responsable">Responsable:</label>
        <input type="text" name="responsable"  value=<?php echo $responsable; ?>  class="form-control">
    </div>
        <br>
    <div class="container">
        <label for="etat">Etat:</label>
        <input type="text" name="etat"  value=<?php echo $etat; ?>  class="form-control">
    </div> 
  
        <br>
        <button type="submit" class="btn btn-primary">Modifier</button>
    </form>
</div>
</body>
</html>

