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
    <h2>Formulaire de création d'un étudiant</h2>
    <div class="container">
    <form action="ajouterEtudiant.php" method="POST">
        <div class="form-group">
        <label for="code_massar">Code Massar:</label>
        <input type="text" name="code_massar" placeholder="Donnez le code massar" class="form-control">
    </div>
    
        <div class="container">
        <label for="nom_etud">Nom:</label>
        <input type="text" name="nom_etud" placeholder="Donnez le nom"  class="form-control">
    </div>
    <div class="container">
        <label for="prenom_etud">Prénom:</label>
        <input type="text" name="prenom_etud" placeholder="Donnez le prénom"  class="form-control">
    </div>   
    <div class="container">
        <label for="responsable">Responsable:</label>
        <input type="text" name="responsable" placeholder="Donnez le nom du responsable"  class="form-control">
    </div> 
    <div class="container">
        <label for="etat">Etat:</label>
        <input type="text" name="etat" placeholder="Donnez l'état de l'etudiant"  class="form-control">
    </div> 
    
        <br>
        <button type="submit" class="btn btn-primary">Ajouter</button>
    </form>
</div>
</main>
</body>
</html>