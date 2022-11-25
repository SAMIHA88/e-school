
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

$code_gresa=$_POST['code_gresa'];
$nom_sous_etab=$_POST['nom_sous_etab'];
$adresse_sous_etab=$_POST['adresse_sous_etab'];
$surface=$_POST['surface'];
$num_compteur=$_POST['num_compteur'];
$nbr_toilettes=$_POST['nbr_toilettes'];
$nbr_salles=$_POST['nbr_salles'];
$nbr_insti=$_POST['nbr_insti'];
$nbr_etud=$_POST['nbr_etud'];

if(empty($code_gresa) || empty($nom_sous_etab) || empty($adresse_sous_etab)|| empty($surface)|| empty($num_compteur)|| empty($nbr_toilettes)|| empty($nbr_salles)|| empty($nbr_insti)|| empty($nbr_etud)){
    if(empty($code_gresa)){
        echo '<div class="alert alert-warning">Le code gresa est vide</div>';
    }
    if(empty($nom_sous_etab)){
        echo "<div class='alert alert-warning'>Le nom est vide</div>";
    }
    if(empty($adresse_sous_etab)){
        echo "<div class='alert alert-warning'>L' adresse est vide</div>";
    }
    if(empty($surface)){
        echo "<div class='alert alert-warning'>La surface est vide</div>";
    }
    if(empty($num_compteur)){
        echo "<div class='alert alert-warning'>Le numéro du compteur est vide</div>";
    }
    if(empty($nbr_toilettes)){
        echo "<div class='alert alert-warning'>Le nombre des toilettes est vide</div>";
    }
    if(empty($nbr_salles)){
        echo "<div class='alert alert-warning'>Le nombre des salles est vide</div>";
    }
    if(empty($nbr_insti)){
        echo "<div class='alert alert-warning'>Le nombre des instituteurs est vide</div>";
    }
    if(empty($nbr_etud)){
        echo "<div class='alert alert-warning'>Le nombre des étudiantss est vide</div>";
    }
    echo "<a href='javascript:self.history.back()'> Page précédente</a>";
}else{
    $req="insert into sous_etab (code_gresa,nom_sous_etab,adresse_sous_etab,surface,num_compteur,nbr_toilettes,nbr_salles,nbr_insti,nbr_etud) values ('$code_gresa','$nom_sous_etab','$adresse_sous_etab','$surface','$num_compteur','$nbr_toilettes','$nbr_salles','$nbr_insti','$nbr_etud')";
    $connexion->exec($req);
    header("Location:MenuGestion.php");
}
?>
    </div>
</body>
</html>