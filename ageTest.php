<?php
//Récuperation des données
//passées en URL
$name = $_GET["name"] ?? "NAME" ; 
$fruit = $_GET["age"] ?? 0;


//variable qui stocke message d'erreur
$errors = "";
//Tests de validation de la saisie
//avec ajout des message d'erreurs en cas de saisie
if (empty($age)){
    $errors.= "SAISIR AGE SVP <br>";

}
if(empty($name)){
    $errors.= "SAISIR UN NOM SVP <br>";
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<h1>Page par défaut</h1>
Affichage des variables PHP
    <?php if(empty($errors)) :?>

<div>
    <?php echo "$name"; ?>
    <?php echo "$age"; ?>
</div>
 
    <?php  else : ?>
        
    <div style="background-color:red; color:white">
            <?= $errors ?>
        </div>

        <?php endif ?>



    <form method="get">
    <div>
        <label>Nom</label>
        <input type="text" name="name" value="<?= $name ?>">
    </div>
    <div>
        <label>Age</label>
        <input type="number" name="age" value="<?= $age ?>">
    </div>

    <button type="submit">VALIDATE</button>
  

</form>
    
</body>
</html>