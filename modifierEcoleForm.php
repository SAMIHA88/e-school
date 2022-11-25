<?php 
require('connexion.php');
require('Menu.php');
$id=$_GET['id'];
$reqpre=$connexion->prepare("select * from etablissement where id =?");
$reqpre->execute([$id]);
$etablissement=$reqpre->fetch();
$code_gresa=$etablissement['code_gresa'];
$code_statistique=$etablissement['code_statistique'];
$nom_etab=$etablissement['nom_etab'];
$nbr_sous_etab=$etablissement['nbr_sous_etab'];
$nbr_inst=$etablissement['nbr_inst'];
$nbr_etud=$etablissement['nbr_etud'];
$adresse_etab=$etablissement['adresse_etab'];
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
    <form action="listerEcoleForm.php" method="POST">
        <div class="form-group">
        <label for="code_gresa">Code Gresa:</label>
        <input type="text" name="code_gresa" value=<?php echo $code_gresa; ?> class="form-control">
    </div>
        <br>
        <div class="container">
        <label for="code_statistique">Code des statistiques:</label>
        <input type="text" name="code_statistique"  value=<?php echo $code_statistique; ?>  class="form-control">
    </div>
        <br>
    <div class="container">
        <label for="nom_etab">Nom de l'établissement:</label>
        <input type="text" name="nom_etab"  value=<?php echo $nom_etab; ?>  class="form-control">
    </div> 
    <div class="container">
        <label for="nbr_sous_etab">Nombre des unités scolaires:</label>
        <input type="number" name="nbr_sous_etab"  value=<?php echo $nbr_sous_etab; ?>  class="form-control">
    </div> 
    <div class="container">
        <label for="nbr_inst">Nombre d'intituteurs:</label>
        <input type="number" name="nbr_inst"  value=<?php echo $nbr_inst; ?>  class="form-control">
    </div> 
    <div class="container">
        <label for="nbr_etud">Nombre des étudiants:</label>
        <input type="number" name="nbr_etud"  value=<?php echo $nbr_etud; ?>  class="form-control">
    </div> 
    <div class="container">
        <label for="adresse_etab">Adresse de l'établissement:</label>
        <input type="text" name="adresse_etab"  value=<?php echo $adresse_etab; ?>  class="form-control">
    </div>   
        <br>
        <button type="submit" class="btn btn-primary">Modifier</button>
    </form>
</div>
</body>
</html>

