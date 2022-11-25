<?php 
require('connexion.php');
require('Menu.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>Formulaire de création</title>
</head>
<body>
<style>
        .container{
            color:#111;
            font-family: 'Dancing Script', cursive;
        }
        h2{
            color:blue;
            font-family: 'Dancing Script', cursive;
        }
    </style>
<main class="main-content">
    <h2>Formulaire de création d'un instituteur</h2>
    <div class="container">
    <form action="ajouterInstituteur.php" method="POST">
        <div class="form-group">
        <label for="num_somme">N° de somme:</label>
        <input type="text" name="num_somme" placeholder="Donnez le N° de somme" class="form-control">
    </div>
    
        <div class="container">
        <label for="date_embauche">Date d'embauche:</label>
        <input type="date" name="date_embauche" placeholder="Donnez la date d'embauche"  class="form-control">
    </div>
    <div class="container">
        <label for="date_nomination">Date de nomination:</label>
        <input type="date" name="date_nomination" placeholder="Donnez la date de nomination"  class="form-control">
    </div>   
    <div class="container">
        <label for="nom_ins">Nom de l'instituteur:</label>
        <input type="text" name="nom_ins" placeholder="Donnez le nom"  class="form-control">
    </div> 
    <div class="container">
        <label for="prenom_ins">Pérenom de l'instituteur:</label>
        <input type="text" name="prenom_ins" placeholder="Donnez le prénom"  class="form-control">
    </div> 
    <div class="container">
        <label for="sous_etab">Unité scolaire</label>
        <input type="text" name="sous_etab" placeholder="Donnez l'unité scolaire"  class="form-control">
    </div> 
    <div class="container">
        <label for="situation_administrative">Situation administrative:</label>
        <input type="text" name="situation_administrative" placeholder="Donnez la situation administrative"  class="form-control">
    </div> 
    <div class="container">
        <label for="niveau_assigne">Le niveau assigné:</label>
        <input type="text" name="niveau_assigne" placeholder="Donnez le niveau assigné"  class="form-control">
    </div>
        <br>
        <button type="submit" class="btn btn-primary">Ajouter</button>
    </form>
</div>
</main>
</body>
</html>