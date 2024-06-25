<?php
    require_once 'app/controller/controller_theme.php';
    foreach ($themes as $theme){
        echo '<p class="section_filtre">' . $theme['label'].'</p>'; 
    }

?>
