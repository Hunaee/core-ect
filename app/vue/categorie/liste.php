<?php
    require_once 'app/controller/controller_categorie.php';
    foreach ($categories as $categorie){
        echo '<p class="section_filtre">' . $categorie['label'].'</p>';
        // echo $pdo; 
    }

?>
