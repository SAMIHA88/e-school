<?php 
require('connexion.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>createform</title>
</head>
<body>
    <div class="container">
    <form action="create.php" method="POST">
        <div class="form-group">
        <label for="nom">Nom:</label>
        <input type="text" name="nom" placeholder="Donnez le nom" class="form-control">
    </div>
        <br>
        <div class="container">
        <label for="prenom">Prenom:</label>
        <input type="text" name="prenom" placeholder="Donnez le prenom"  class="form-control">
    </div>
        <br>
    <div class="container">
        <label for="age">Age:</label>
        <input type="text" name="age" placeholder="Donnez l'age"  class="form-control">
    </div>   
        <br>
        <button type="submit" class="btn btn-primary">Ajouter</button>
    </form>
</div>
</body>
</html>