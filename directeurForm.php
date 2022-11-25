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
    <h2>Formulaire de création d'un directeur</h2>
    <div class="container">
    <form action="ajouterDirecteur.php" method="POST">
        <div class="form-group">
        <label for="num_somme">N° Somme:</label>
        <input type="text" name="num_somme" placeholder="Donnez le numero de somme" class="form-control">
    </div>
    
        <div class="container">
        <label for="nom_dir">Nom:</label>
        <input type="text" name="nom_dir" placeholder="Donnez le nom"  class="form-control">
    </div>
    <div class="container">
        <label for="prenom_dir">Prénom:</label>
        <input type="text" name="prenom_dir" placeholder="Donnez le prénom"  class="form-control">
    </div>   
    
        <br>
        <button type="submit" class="btn btn-primary">Ajouter</button>
    </form>
</div>
</main>
</body>
</html>