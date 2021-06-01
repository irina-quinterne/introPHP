<?php

//var_dump($_POST);//affiche comme consolelog indem es auf der Seite sch
// isset -> booléen qui indique si on a coché la case ou pas
$subscribed=isset($_POST["abonnement"]);
$isPosted = isset($_POST["submit"]); //count($_POST) > 0

if($subscribed){
    $message='Merci pour votre abonnement';
}else if ($isPosted) {
    $message='Tant pis';
} else {
    $message = "";
}
?>

<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- hier script js -->
    <title>Document</title>
</head>

<body>
<?php include "navigation.php"; ?>

    <div><?php echo $message ?></div>

    <form method="post">
        <div>
            <!-- la variable n'est pas transmise wenn case nicht cochée  -->
            <input type="checkbox" name="abonnement">
            <label>Je veux m'abonner</label>
        </div>
        <div>
            <input type="checkbox" required>
            <label>Condition ok</label>
        </div>


        <button type="submit" name="submit">Valider</button>

    </form>
    <!-- andere Möglichkeit anstelle von echo -->
    <p><?= $message ?></p>

</body>

</html>