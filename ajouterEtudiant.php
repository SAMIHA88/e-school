
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>Ajouter Ecole</title>
</head>
<body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <div class="container">
    <?php 
require('connexion.php');

$code_massar=$_POST['code_massar'];
$nom_etud=$_POST['nom_etud'];
$prenom_etud=$_POST['prenom_etud'];
$responsable=$_POST['responsable'];
$etat=$_POST['etat'];
if(empty($code_massar) || empty($nom_etud) || empty($prenom_etud)|| empty($responsable)|| empty($etat)){
    if(empty($code_massar)){
        echo '<div class="alert alert-warning">Le code massar est vide</div>';
    }
    if(empty($nom_etud)){
        echo "<div class='alert alert-warning'>Le nom est vide</div>";
    }
    if(empty($prenom_etud)){
        echo "<div class='alert alert-warning'>Le prenom est vide</div>";
    }
    if(empty($responsable)){
        echo "<div class='alert alert-warning'>Le responsable est vide</div>";
    }
    if(empty($etat)){
        echo "<div class='alert alert-warning'>L'état' est vide</div>";
    }
    echo "<a href='javascript:self.history.back()'> Page précédente</a>";
}else{
    $req="insert into etudiant (code_massar,nom_etud,prenom_etud,responsable,etat) values ('$code_massar','$nom_etud','$prenom_etud','$responsable','$etat')";
    $connexion->exec($req);
    header("Location:MenuGestion.php");
}
?>
    </div>
</body>
</html>