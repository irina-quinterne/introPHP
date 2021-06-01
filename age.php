<?php
//etape 2 - creer zone controlleur - php
//le formulaire est-il posté-envoyé?
$isPosted = isset($_GET["age"]); // is set

if ($isPosted) {
//recuperationde la saisie
    $age = $_GET["age"];

    //var_dump($_GET); //test //innerhalb der condition platzieren
    //denn die Eingabe existiert in der Condition (condition ($isPosted))
}
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<?php include "navigation.php"; ?>


<?php

if ($isPosted) {
    if ($age < 18) {
        echo "mineur";
    } else {
        echo "majeur";
    }
}

?>

    <form method="get">
        <label>AGE</label>
        <input type="number" name="age">
        <button type="submit">OK</button>
    </form>

</body>
</html>