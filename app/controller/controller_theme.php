<?php
require_once 'app/modele/modele_theme.php';

$theme_model = new Themes($pdo);

$id = isset($_GET['id']) ? (int)$_GET['id'] : null;
if(isset($id)){
    $theme = $theme_model->get_theme_by_id($id);
}
else{
    $themes = $theme_model->get_theme_liste();
}

// if ($id === null) {
//     http_response_code(400);
//     echo 'Aucun ID de catégorie fourni.';
//     exit;
// }

?>