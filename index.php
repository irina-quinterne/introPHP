<?php
$colorList = ["red", "blue", "yellow", "green", "orange", "pink"];

//Récuperation des données
//passées en URL
$name = $_GET["name"] ?? "Ghost";
$nom = "Irina";
$fruit = $_GET["fruit"] ?? "banane";
$color = $_GET["color"] ?? "yellow";
$size = $_GET["size"] ?? 25;
//var_dump ($color); //retourne string de la variable
//var_dump ($_GET); //retourne string du array _GET

//variable qui stocke message d'erreur
$errors = "";
//Tests de validation de la saisie
//avec ajout des message d'erreurs en cas de saisie
if (empty($name)) {
    $errors .= "SAISIR UN NOM SVP <br>";
}
if (empty($fruit)) {
    $errors .= "SAISIR UN FRUIT SVP <br>";
}

if (empty($color)) {
    $errors .= "SAISIR UNE COULEUR SVP <br>";
}

if ($size < 10) {
    $errors .= "SAISIR UNE TAILLE SUPERIEURE A 10 <b>";
} else if ($size > 70) {
    $errors .= "SAISIR UNE TAILLE INFERIEURE A 70 <b>";
}
?>


<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Accueil</title>
    <style>
    body {
        background-color: <?php echo $color;
        ?>;
        font-size: <?php echo $size;
        ?>;
    }

    input {
        width: 300px;
    }
    </style>
</head>

<body>
<?php include "navigation.php"; ?>
    <h1>Page par défaut</h1>
    Affichage des variables PHP
    <?php if (empty($errors)): ?>

    <div>
        <?php echo "<h2>Bonjour " . $name . "</h2>"; ?>
        <?php echo "<h2>Bonjour $name </h2>"; ?>

        <?php echo "Vous aimez les ${fruit}s"; ?>
        <?php echo "<p>Vous aimez les " . $fruit . "s </p>"; ?>
    </div>

    <?php else: ?>


    <div style="background-color:red; color:white">
        <?=$errors?>
    </div>

    <?php endif?>


    <!-- liens vers l'index avec des parametres differents -->
    <!-- pour generer via differents liens differents contenus dans la meme page -->
    <ul>
        <li><a href="/?nom=Alice&fruit=raisin">Bonjour Alice</a></li>
        <li><a href="/?nom=Pauline&fruit=cerise">Bonjour Pauline</a></li>
    </ul>
    <form method="get">
        <div>
            <label>Nom</label>
            <input type="text" name="name" value="<?=$name?>">
        </div>
        <div>
            <label>Fruit</label>
            <input type="text" name="fruit" value="<?=$fruit?>">
        </div>

        <div>
            <label>couleur</label>
            <select name="color">
                <!-- boucle sur la liste de colors -->
                <?php foreach($colorList as $item): ?>
                <!-- Affichage de l'element de colorList en cours -->
                <!-- preselection de la couleur en fonction du choix précédent -->
                <option <?=  $item==$color ? "selected" : ""?>>
                    <?php echo $item ?>
                </option>
                <!-- fin de boucle -->
                <?php endforeach ?>
            </select>
        </div>

        <div>
            <label>Taille</label>
            <input type="number" name="size" min="1" max="700" placeholder="La taille en px sans l'unité"
                value="<?=$size?>">
        </div>
        
        <button type="submit">VALIDATE</button>
    </form>

</body>

</html>