<!-- meilleure solution que celle d'avant -->
<?php

var_dump($_POST);
$skills =$_POST["skills"] ?? [];
var_dump($skills);
?>


<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Competences</title>
</head>

<body>
<?php include "navigation.php"; ?>

    <form method="post">
        <div>
            <input type="checkbox" value="Java" name="skills[]">
            <label>Java</label>
        </div>


        <div>
            <input type="checkbox" value="PHP" name="skills[]">
            <label>PHP</label>
        </div>

        <div>
            <input type="checkbox" value="CSS" name="skills[]">
            <label>CSS</label>
        </div>

        <button type="submit" name="submit">Valider</button>

    </form>

</body>

</html>