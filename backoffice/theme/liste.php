<a class="item_btn item_list_nouvelle_cat" href="index.php?page=nouveau&entite=theme">Nouveau thème</a>
<br/>

<?php


$sql = "SELECT * FROM theme";
$res = $pdo->query($sql);
$themes = $res->fetchAll();

foreach ($themes as $theme) {

    echo '<div class="item_container">';
    echo '<p class="item_label">'. $theme['label'] . '</p>';
    echo '<a class="item_btn item_list_nav" href="index.php?page=editer&entite=theme&id='. $theme['id'].'">Modifier</a>';
    echo '</div>';
}


?>