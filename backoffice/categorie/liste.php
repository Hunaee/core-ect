<a class="item_btn item_list_nouvelle_cat" href="index.php?page=nouveau">Nouvelle categorie</a>
<br/>

<?php


$sql = "SELECT * FROM categorie";
$res = $pdo->query($sql);
$categories = $res->fetchAll();

foreach ($categories as $categorie) {

    echo '<div class="item_container">';
    echo '<p class="item_label">'. $categorie['label'] . '</p>';
    echo '<a class="item_btn item_list_nav" href="index.php?page=editer&id='. $categorie['id'].'">Modifier</a>';
    echo '</div>';
}

?>