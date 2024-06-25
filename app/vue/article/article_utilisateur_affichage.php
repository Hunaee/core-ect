<?php
require_once 'app/controller/controller_article.php';


foreach ($articles as $article) {

        echo '<img class="article_utilisateur" src="img/utilisateur_image/' . $article['image'] . '" alt="Image de l\'utilisateur">';

}
?>