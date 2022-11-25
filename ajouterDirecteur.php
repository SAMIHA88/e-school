
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
$nom_dir=$_POST['nom_dir'];
$prenom_dir=$_POST['prenom_dir'];
if(empty($num_somme) || empty($nom_dir) || empty($prenom_dir)){
    if(empty($num_somme)){
        echo '<div class="alert alert-warning">Le numero de somme est vide</div>';
    }
    if(empty($nom_dir)){
        echo "<div class='alert alert-warning'>Le nom est vide</div>";
    }
    if(empty($prenom_dir)){
        echo "<div class='alert alert-warning'>Le prenom est vide</div>";
    }
    
    echo "<a href='javascript:self.history.back()'> Page précédente</a>";
}else{
    $req="insert into directeur (num_somme,nom_dir,prenom_dir) values ('$num_somme','$nom_dir','$prenom_dir')";
    $connexion->exec($req);
    header("Location:MenuGestion.php");
}
?>
    </div>
</body>
</html>