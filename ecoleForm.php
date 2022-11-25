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
    <h2>Formulaire de création d'un établissement scolaire</h2>
    <div class="container">
    <form action="ajouterEcole.php" method="POST">
        <div class="form-group">
        <label for="code_gresa">Code Gresa:</label>
        <input type="text" name="code_gresa" placeholder="Donnez le code gresa" class="form-control">
    </div>
    
        <div class="container">
        <label for="code_statistique">code des statistiques:</label>
        <input type="text" name="code_statistique" placeholder="Donnez le code des statistiques"  class="form-control">
    </div>
    <div class="container">
        <label for="nom_etab">Nom de l'établissement:</label>
        <input type="text" name="nom_etab" placeholder="Donnez le nom de l'école"  class="form-control">
    </div>   
    <div class="container">
        <label for="nbr_sous_etab">Nombre des unités scolaires:</label>
        <input type="number" name="nbr_sous_etab" placeholder="Donnez le nombre des unités scolaires"  class="form-control">
    </div> 
    <div class="container">
        <label for="nbr_inst">Nombre des instituteurs:</label>
        <input type="number" name="nbr_inst" placeholder="Donnez le nombre des instituteurs"  class="form-control">
    </div> 
    <div class="container">
        <label for="nbr_etud">Nombre des étudiants</label>
        <input type="number" name="nbr_etud" placeholder="Donnez le nombre des étudiants"  class="form-control">
    </div> 
    <div class="container">
        <label for="adresse_etab">Adresse de l'école:</label>
        <input type="text" name="adresse_etab" placeholder="Donnez l'adresse de l'école"  class="form-control">
    </div> 
        <br>
        <button type="submit" class="btn btn-primary">Ajouter</button>
    </form>
</div>
</main>
</body>
</html>