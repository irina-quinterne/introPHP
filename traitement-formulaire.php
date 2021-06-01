<?php
include "navigation.php";

//recuperation des donnees depuis formulaire.html
$nom = $_POST['nom'] ?? "Inconnu";

$erreur = "";
if(empty($nom)){
    $erreur ="Saisir un nom";
    echo $erreur;
} else {
   echo "Bonjour $nom";
}

// affichage
//echo "Bonjour $nom";
