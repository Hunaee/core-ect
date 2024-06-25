<?php

class Categorie
{
    private $db; //stockez la bdd que le __construct va définir

    public function __construct(PDO $db)
    {
        $this->db = $db;
    }

    public function get_categorie_by_id($id)
    {
        $query = $this->db->prepare('SELECT * FROM categorie WHERE id = :id');
        $query->execute(['id' => $id]);
        return $query->fetch(PDO::FETCH_ASSOC);
    }

    public function get_categorie_liste()
    {
        $query=$this->db->query('SELECT * FROM categorie ORDER BY id ASC');
        return $query->fetchAll(PDO::FETCH_ASSOC);
    }
}

?>