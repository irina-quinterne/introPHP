<?php 
//das gleiche wie isset($_POST["submit"]) :
//$isPosted = filter_has_var(INPUT_POST, "submit")
//Konstante : INPUT_POST
//la clé "submit" est elle presente dans le tableau $_POST ?
//la source sous la forme d'une constante et la clé qu'on recherche 
//la fonction est ecrite avec la constante INPUT_POST
//Konstante also kein $ !
$isPosted = filter_has_var(INPUT_POST, "submit");

if ($isPosted){
    //recuperation de la saisie
nterschied :
    //filter_input renvoi null
    //Hinzufügen des Filters FILTER_SANITIZE_STRING -> unter anderem supprime ttes les balises
    $nom = filter_input(INPUT_POST,"nom", FILTER_SANITIZE_STRING);
    $prenom = filter_input(INPUT_POST, "prenom", FILTER_SANITIZE_URL);
    $age = filter_input(INPUT_POST, "age", FILTER_SANITIZE_NUMBER_INT);

    //var_dump($age);

    echo "Hello $prenom $nom";    
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FORMULAIRE FILTER_INPUT</title>
</head>

<body>

    <form method="post">
        <div>
            <label>PRENOM</label>
            <input type="text" name="prenom">
        </div>

        <div>
            <label>NOM</label>
            <input type="text" name="nom">

        </div>
        
        <div>
            <label>AGE</label>
            <input type="text" name="nom">

        </div>

        <button type="submit" name="submit">Valider</button>

    </form>

</body>

</html>