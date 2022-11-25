
<?php 
require('connexion.php');
require('Menu.php');
$id=$_GET['id'];
$reqpre=$connexion->prepare("select * from directeur where id =?");
$reqpre->execute([$id]);
$directeur=$reqpre->fetch();
$num_somme=$directeur['num_somme'];
$nom_dir=$directeur['nom_dir'];
$prenom_dir=$directeur['prenom_dir'];
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
    <form action="listerDirecteurForm.php" method="POST">
        <div class="form-group">
        <label for="num_somme">N° Somme:</label>
        <input type="text" name="num_somme" value=<?php echo $num_somme; ?> class="form-control">
    </div>
        <br>
        <div class="container">
        <label for="nom_dir">Nom:</label>
        <input type="text" name="nom_dir"  value=<?php echo $nom_dir; ?>  class="form-control">
    </div>
        <br>
    <div class="container">
        <label for="prenom_dir">Prénom:</label>
        <input type="text" name="prenom_dir"  value=<?php echo $prenom_dir; ?>  class="form-control">
    </div> 
    
        <br>
        <button type="submit" class="btn btn-primary">Modifier</button>
    </form>
</div>
</body>
</html>

