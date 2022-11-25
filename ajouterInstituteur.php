
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

$num_somme=$_POST['num_somme'];
$date_embauche=$_POST['date_embauche'];
$date_nomination=$_POST['date_nomination'];
$nom_ins=$_POST['nom_ins'];
$prenom_ins=$_POST['prenom_ins'];
$sous_etab=$_POST['sous_etab'];
$situation_administrative=$_POST['situation_administrative'];
$niveau_assigne=$_POST['niveau_assigne'];
if(empty($num_somme) || empty($date_embauche) || empty($date_nomination)|| empty($nom_ins)|| empty($prenom_ins)|| empty($sous_etab)|| empty($situation_administrative)|| empty($niveau_assigne)){
    if(empty($num_somme)){
        echo '<div class="alert alert-warning">Le N° de somme est vide</div>';
    }
    if(empty($date_embauche)){
        echo "<div class='alert alert-warning'>La date d'embauche est vide</div>";
    }
    if(empty($date_nomination)){
        echo "<div class='alert alert-warning'>La date de nomination est vide</div>";
    }
    if(empty($nom_ins)){
        echo "<div class='alert alert-warning'>Le nom de l'instituteur est vide</div>";
    }
    if(empty($prenom_ins)){
        echo "<div class='alert alert-warning'>Le prenom de l'instituteur est vide</div>";
    }
    if(empty($sous_etab)){
        echo "<div class='alert alert-warning'>Le nom de l'unité scolaire est vide</div>";
    }
    if(empty($situation_administrative)){
        echo "<div class='alert alert-warning'>La situation administrative est vide</div>";
    }
    if(empty($niveau_assigne)){
        echo "<div class='alert alert-warning'>Le niveau assigné est vide</div>";
    }
    echo "<a href='javascript:self.history.back()'> Page précédente</a>";
}else{
    $req="insert into instituteur (num_somme,date_embauche,date_nomination,nom_ins,prenom_ins,sous_etab,situation_administrative,niveau_assigne) values ('$num_somme','$date_embauche','$date_nomination','$nom_ins','$prenom_ins','$sous_etab','$situation_administrative','$niveau_assigne')";
    $connexion->exec($req);
    header("Location:MenuGestion.php");
}
?>
    </div>
</body>
</html>