<?php
session_start();
require_once 'connexion.php';
require_once 'app/controller/controller_utilisateur.php';
gestion_user_res($pdo);


$page = 'home';
$pages_exclues = ['me_connecter', 'inscription'];


if(isset($_GET['page'])){
    $page_requise = basename($_GET['page']);
    $filename = 'page/' . $page_requise . '.php';
    if(file_exists($filename)){
        $page = $page_requise;
    }
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <?php if (!in_array($page, $pages_exclues)) {
        echo '<link rel="stylesheet" href="css/menu_squelette.css">';
        echo '<link rel="stylesheet" href="css/footer_squelette.css">';
    }?>
    
    <link rel="stylesheet" href="css/<?= htmlspecialchars($page) ?>.css"> <!-- Empêcher les injections de code malveillant pour le htmlspecialchars -->
</head>
<body>
    <?php

    if (!in_array($page, $pages_exclues)) { include 'menu_squelette.php'; }


    include 'page/' . htmlspecialchars($page) . '.php';

    if (!in_array($page, $pages_exclues)) { include 'footer_squelette.php';}

    ?>

    
</body>
</html>
