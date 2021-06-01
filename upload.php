<?php
include "navigation.php";
//var_dump($_FILES)

//fonction isset(). initialisation d'une variable pour post-recuperation via fonction isset()
//1er parametre-argument : $_FILES. 2ème parametre-argument : ["photo"]
//$_FILES comme $_GET, $_POST
$hasUpload = isset($_FILES["photo"]);
//Keine Initialisation oben, wie in JS wie folgt: $upload = null;
//sauf si utilisation dans HTML (wie z. B. $errors).Hier aber im if

//tableau associatif avec liste de types autorisés
$allowedTypes = [
    "image/jpeg" => ".jpg",
    "image/png" => "png",
    "image/gif" => ".gif",
];

if ($hasUpload) {
    $upload = $_FILES["photo"];

    //var_dump($upload);

    //definir si type de fichier est dans la liste des types autorisés
    if (array_key_exists($upload["type"], $allowedTypes)) {

        //Définir un nom unique chemin relatif - car src a besoin d'un chemin relatif
        $imgName = "/images/" . uniqid() . ".jpg";
        //Définir le chemin absolu vers le fichier
        $targetPath = getcwd() . $imgName;

        //if(! move_uploaded_file($upload["tmp_name"], $targetPath)){
        //echo "echec de l'upload";

        //Déplacer le fichier temporaire 
        //fonction move_uploaded_file() -> deplace data dans fichier images
        if (!move_uploaded_file($upload["tmp_name"], $targetPath)) {
            echo "Echec du Upload";
        } else {
            echo "<img src=\"$imgName\">"; //echapper car double ""
        }
    } else {
        echo "seulement fichiers jpeg, png ou gif";
    }
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

    <form method="post" enctype="multipart/form-data">
        <div>
            <label>PHOTO</label>
            <input type="file" name="photo">
        </div>

        <button type="submit" name="submit">Send</button>

    </form>

</body>

</html>
