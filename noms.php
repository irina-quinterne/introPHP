<?php 
include "navigation.php";

$firstNames = [
    "Jean", "Francis", "Ursuline", "Tim", "Paul", "Heinrich", "Pierre", "Jeanne"
];

$names = [
    "Von Strolch", "Müller", "Dupont", "Lamborgini", "Kim", "Korsakoff"
];

//echo array_rand($firstNames); //ca retourne une clé aléatoire- also eine Nummer

echo $firstNames [array_rand($firstNames)]
." ".
$names[array_rand($names)];

echo "<br><br>"; //<br> avant le select
echo "<select>";

foreach($firstNames as $item){
    echo "<option>$item</option>";//echo -> afficher-ecrire dans la reponse
}

echo "</select>";

?>


<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Noms</title>

<body>
</body>
</html>