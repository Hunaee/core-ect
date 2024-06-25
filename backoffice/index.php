<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <link rel="stylesheet" href="css/style.css">
</head>

<body>
    <img src="../img/bg-travail.png" alt="background-image-travail" class="img_background_logo">
    <header>
        <nav>
            <img src="../img/logocorrect.svg" alt="logo" class="img_logo">
            <a href="index.php?page=liste&entite=categorie" class="menu">Catégories</a>
            <a href="index.php?page=liste&entite=theme" class="menu">Thèmes</a>
        </nav>
        <hr>
    </header>
    <?php

    require_once '../connexion.php';

    $page = 'liste';
    $entite = 'categorie';

    if (isset($_GET['page'])) {
        $page = $_GET['page'];
    }

    if(isset($_GET['entite'])) {
        $entite = $_GET['entite'];
    }

    require $entite. '/' . $page . '.php';


    // if(isset($_GET['page'])){
    //     $requested_page = basename($_GET['page']);
    //     $filename = 'page/' . $requested_page . '.php';
    //     if(file_exists($filename)){
    //         $page = $requested_page;
    //     }
    // }

    ?>
</body>

</html>
