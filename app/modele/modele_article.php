<?php

class Article {

    private $db;

    public function __construct(PDO $db){
        $this->db = $db;
    }


    public function article_utilisateur(){
        $query = $this->db->prepare('SELECT * FROM article WHERE id_utilisateur = :utilisateur_connecter');
        $query->execute(['utilisateur_connecter' => $_SESSION['id_utilisateur']['id']]);
        return $query->fetchAll(PDO::FETCH_ASSOC);
    }

}


?>