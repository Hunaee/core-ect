<?php
require_once 'categorie_model.php';


$categorieModel = new Categorie($pdo);

$id = isset($_GET['id']) ? (int)$_GET['id'] : null;
var_dump($id);
if(isset($id)){
    $categorie = $categorieModel->get_categorie_by_id($id);
}
else{
    $categorie = $categorieModel->get_categorie_liste();
}


require_once 'categorie_view.php';


// if ($id === null) {
//     http_response_code(400);
//     echo 'Aucun ID de catégorie fourni.';
//     exit;
// }