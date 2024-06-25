<?php

require_once '../connexion.php';

try{

    if(empty($_POST['id'])){
        $sql = "INSERT INTO theme (label) VALUES (:label)";
        $res = $pdo->prepare($sql);
        $res->execute(['label' => $_POST['label']]);
    }
    else{
        $sql = "UPDATE theme SET label=:label WHERE id=:id";
        $res = $pdo->prepare($sql);
        $res->execute(['label' => $_POST['label'], 'id' => $_POST['id']]);
    }
}
catch(\Throwable $t){
    echo '<strong>Impossible d\'executer la requete, recommencez</strong>';
    die;
}

header('Location: index.php?page=liste&entite=theme');
exit;