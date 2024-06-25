<?php
$sql = "SELECT * FROM categorie WHERE id = :identifiant";
$res = $pdo->prepare($sql);
$res->execute(['identifiant' => $_GET['id']]);
$categorie = $res->fetch();

// var_dump('ouiouioui');

?>
<div class='hero_section_page'>

    <form action="index.php?page=save" method="POST">
        <input type="hidden" name="id" value="<?= $categorie['id'] ?>">
        <label for="">Modifier le nom de la catégorie
            
        </label>
        <input type="text" name="label" value="<?php echo $categorie['label'] ?>">
        <button class="item_btn item_save">Save</button>
    </form>

    <a href="index.php?page=liste" class="btn_back">Back</a>
</div>

<!-- <br /><b>Warning</b>:  Undefined variable $categorie in <b>C:\xampp\htdocs\coreect\backoffice\categorie\editer.php</b> on line <b>13</b><br /><br /><b>Warning</b>:  Trying to access array offset on value of type null in <b>C:\xampp\htdocs\coreect\backoffice\categorie\editer.php</b> on line <b>13</b><br /> -->