<?php
require_once 'app/modele/modele_article.php';

$article_modele = new Article($pdo);


if($_GET['page'] == 'profil'){
    $articles = $article_modele->article_utilisateur();
}


?>