<?php 
//lecture du contenu d'un fichier
$data = file_get_contents("data/noms.txt");

//explode() -> wie split() in JS :
//um string zu einem array zu convertieren und den Separator definieren
//POUR RETURN SPRUNG \n ..... \r\n pour pc
$list= explode("\r\n", $data);
//Si posté. Si form a ete envoyé
$isPosted = filter_has_var(INPUT_POST, "submit");
var_dump($_POST);

if($isPosted){ 
    //variabel "nom" //récuperation de la saisie
    $name = filter_input(INPUT_POST, "nom", FILTER_SANITIZE_STRING);
    //insertion dns la liste si la saisie n'est pas empty
    if(! empty($name)){
    //var_dump($name);
        //ajout au array
        array_push($list, $name);
        //transformation des arrays zu chaine de caractère. 
        //implode() -> Gegensatz von explode()der teile zu einem zusammenfügt
        $listAsString = implode("\r\n", $list);

        file_put_contents("data/noms.txt", $listAsString);




        header("location:lecture-noms.php");
        exit; // exit - ok jetzt hörst du mit der verarbeitung/dem Prozess auf
    }

}


        //header :
        //Redirection pour éviter de reposter les données à l'actualisation de la page
        //Redirection mit header("location:......"); -> REECRITURE URL
        //envoyer une entête - rediriger (à) la page
        //probleme (en rafraichissant la page et en reappuyant sur submit, ça reecrit le nom d'avant, 
        //gardé en memoire)
        //à la fin de l'ajout d'un nom (d'un input) au rafraissement de a page
        //ça renvoie vers une autre page ici auto-renvoi:
        //redirection de la page vers la même page : 
        //pour ce processus c'est get qui est utilisé et ca efface les donnes postées de ((la methode) post)




//var_dump($data);
//var_dump($list);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lecture d'un fichier texte</title>
</head>
<body>
<?php include "navigation.php"; ?>

<form method="post">
    <input type="text" name="nom" placeholder="votre nom">
    <button type = "submit" name="submit">OK</button>
</form>

<!-- affichage de la liste des noms -->
<ul>
<?php foreach($list as $item) : ?>
    <li><?= $item ?></li>
    <?php endforeach ?>
    </ul>
</body>
</html>