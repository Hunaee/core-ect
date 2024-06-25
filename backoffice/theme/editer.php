<?php
$sql = "SELECT * FROM theme WHERE id = :identifiant";
$res = $pdo->prepare($sql);
$res->execute(['identifiant' => $_GET['id']]);
$theme = $res->fetch();




?>
<div class='hero_section_page'>

    <form action="index.php?page=save&entite=theme" method="POST">
        <input type="hidden" name="id" value="<?= $theme['id'] ?>">
        <label for="">Modifier le nom du thème</label>
        <input type="text" name="label" value="<?php echo $theme['label'] ?>">
        <button class="item_btn item_save">Save</button>
    </form>

    <a href="index.php?page=liste&entite=theme" class="btn_back">Back</a>
</div>
