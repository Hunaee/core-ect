<?php

class Themes
{
    private $db;

    public function __construct(PDO $db)
    {
        $this->db = $db;
    }

    public function get_theme_by_id($id)
    {
        $query = $this->db->prepare('SELECT * FROM theme WHERE id = :id');
        $query->execute(['id' => $id]);
        return $query->fetch(PDO::FETCH_ASSOC);
    }

    public function get_theme_liste()
    {
        $query=$this->db->query('SELECT * FROM theme ORDER BY id ASC');

        return $query->fetchAll(PDO::FETCH_ASSOC);

    }
}

?>