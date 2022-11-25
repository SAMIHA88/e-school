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
    <title>delete</title>
</head>
<body>
    <?php
    $id=$_GET['id'];
    $req="delete from instituteur where id=$id";
    $connexion->exec($req);
    //header("Location:listerEcoleForm.php");
    print("<script type=\"text/javascript\">setTimeout('location=(\"listerInstituteurForm.php\")' ,1000);</script>");

    ?>
</body>
</html>
