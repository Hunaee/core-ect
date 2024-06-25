<!DOCTYPE html>
<html>
<head>
    <title>Gestion des catégories</title>
</head>
<body>
<?php require_once '../../connexion.php';
    require_once 'categorie_controller.php';
?>
    <h1>Informations de la catégorie</h1>
    <?php if (isset($categorie)): ?>
        <p>ID : <?= htmlspecialchars($categorie['id']) ?></p>
        <p>Label : <?= htmlspecialchars($categorie['label']) ?></p>
    <?php else: ?>
        <p>Aucune catégorie trouvée.</p>
    <?php endif; ?>

    <?php foreach ($categorie as $cat){
        echo $cat['label']. "</br>";
    }
    ?>
</body>
</html>