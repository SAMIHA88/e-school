
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
$code_statistique=$_POST['code_statistique'];
$nom_etab=$_POST['nom_etab'];
$nbr_sous_etab=$_POST['nbr_sous_etab'];
$nbr_inst=$_POST['nbr_inst'];
$nbr_etud=$_POST['nbr_etud'];
$adresse_etab=$_POST['adresse_etab'];
if(empty($code_gresa) || empty($code_statistique) || empty($nom_etab)|| empty($nbr_sous_etab)|| empty($nbr_inst)|| empty($nbr_etud)|| empty($adresse_etab)){
    if(empty($code_gresa)){
        echo '<div class="alert alert-warning">Le code gresa est vide</div>';
    }
    if(empty($code_statistique)){
        echo "<div class='alert alert-warning'>Le code des statistiques est vide</div>";
    }
    if(empty($nom_etab)){
        echo "<div class='alert alert-warning'>Le nom est vide</div>";
    }
    if(empty($nbr_sous_etab)){
        echo "<div class='alert alert-warning'>Le nombre des unités scolaires est vide</div>";
    }
    if(empty($nbr_inst)){
        echo "<div class='alert alert-warning'>Le nombre d'instituteurs est vide</div>";
    }
    if(empty($nbr_etud)){
        echo "<div class='alert alert-warning'>Le nombre des étudiants est vide</div>";
    }
    if(empty($adresse_etab)){
        echo "<div class='alert alert-warning'>L\'adresse est vide</div>";
    }
    echo "<a href='javascript:self.history.back()'> Page précédente</a>";
}else{
    $req="insert into etablissement (code_gresa,code_statistique,nom_etab,nbr_sous_etab,nbr_inst,nbr_etud,adresse_etab) values ('$code_gresa','$code_statistique','$nom_etab','$nbr_sous_etab','$nbr_inst','$nbr_etud','$adresse_etab')";
    $connexion->exec($req);
    header("Location:MenuGestion.php");
}
?>
    </div>
</body>
</html>