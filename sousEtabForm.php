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
    <h2>Formulaire de la création d'une unité scolaire:</h1>
    <div class="container">
    <form action="ajouterSousEtab.php" method="POST">
        <div class="form-group">
        <label for="code_gresa">Code Gresa:</label>
        <input type="text" name="code_gresa" placeholder="Donnez le code gresa" class="form-control">
    </div>
    
        <div class="container">
        <label for="nom_sous_etab">Nom de l'unité scolaire:</label>
        <input type="text" name="nom_sous_etab" placeholder="Donnez le nom de l'unité scolaire"  class="form-control">
    </div>
    <div class="container">
        <label for="adresse_sous_etab">Adresse de l'unité scolaire:</label>
        <input type="text" name="adresse_sous_etab" placeholder="Donnez l'adresse de l'unité scolaire'"  class="form-control">
    </div>   
    <div class="container">
        <label for="surface">Surface:</label>
        <input type="number" name="surface" placeholder="Donnez la surface"  class="form-control">
    </div> 
    <div class="container">
        <label for="num_compteur">N° du compteur:</label>
        <input type="number" name="num_compteur" placeholder="Donnez le numero du compteur"  class="form-control">
    </div> 
    <div class="container">
        <label for="nbr_toilettes">Nombre des toilettes</label>
        <input type="number" name="nbr_toilettes" placeholder="Donnez le nombre des toilettes"  class="form-control">
    </div> 
    <div class="container">
        <label for="nbr_salles">Nombre des salles</label>
        <input type="number" name="nbr_salles" placeholder="Donnez le nombre des salles"  class="form-control">
    </div> 
    <div class="container">
        <label for="nbr_insti">Nombre des instituteurs</label>
        <input type="number" name="nbr_insti" placeholder="Donnez le nombre des instituteurs"  class="form-control">
    </div> 
    <div class="container">
        <label for="nbr_etud">Nombre des étudiants</label>
        <input type="number" name="nbr_etud" placeholder="Donnez le nombre des étudiants"  class="form-control">
    </div> 
    
        <br>
        <button type="submit" class="btn btn-primary">Ajouter</button>
    </form>
</div>
</main>
</body>
</html>