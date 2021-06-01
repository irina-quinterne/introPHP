<?php
//links à partir du array generieren
$nav = [
    ["text" => "Control de l'age", "href" => "age.php"],
    ["text" => "Nom aléatoire", "href" => "noms.php"],
    ["text" => "Choix des competences", "href" => "competences.php"],
    ["text" => "Home", "href" => "/include-demo/home.php"],
    ["text" => "Accueil", "href" => "index.php"],


];

?>

<nav>
    <ul>
        <?php foreach($nav as $item): ?>
        <li>
            <a href="<?= $item["href"]?>">
                <?= $item["text"] ?>
            </a>
        </li>
        <?php endforeach ?>
    </ul>
</nav>