<?php
require_once 'app/modele/modele_categorie.php';

$categorieModel = new Categorie($pdo);

$id = isset($_GET['id']) ? (int)$_GET['id'] : null;
if(isset($id)){
    $categories = $categorieModel->get_categorie_by_id($id);
}
else{
    $categories = $categorieModel->get_categorie_liste();
}

// if ($id === null) {
//     http_response_code(400);
//     echo 'Aucun ID de catégorie fourni.';
//     exit;
// }

?>