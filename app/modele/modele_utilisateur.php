<?php

class User{
    private $db;

    public function __construct(PDO $db){
        $this->db = $db;

        
    }


    public function inscription($email,$password,$nom,$prenom){
        $sql = "INSERT INTO utilisateur (`mail`, `mdp`,`nom`,`prenom`,`condition_valider`) 
        VALUES (:email_input, :password_input,:nom,:prenom,:condition_valider)";
        
        
        $stmt = $this->db->prepare($sql);
        $stmt->execute([
            'email_input' => $email,
            'password_input' => password_hash($password, PASSWORD_DEFAULT),
            'nom'=>$nom,
            'prenom'=>$prenom,
            'condition_valider'=>1
        ]);
    }



    public function peut_se_connecter($email, $password)
    {
        $sql = 'SELECT * FROM `utilisateur` WHERE `mail` = :email_ph';
        $stmt = $this->db->prepare($sql);
        $stmt->execute(['email_ph' => $email]);
        $res = $stmt->fetch();

        if ($res === false) {
            return false;
        }
    
        return password_verify($password, $res['mdp']); // renvoie true or false
    }

    public function id_utilisateur($email){
        $sql = 'SELECT id FROM `utilisateur` WHERE `mail` = :email';
        $stmt = $this->db->prepare($sql);
        $stmt->execute(['email' => $email]);
        $res = $stmt->fetch();
        
        return $res;
    }

    public function affichage_utilisateur($email){
        $sql ='SELECT * FROM `utilisateur` WHERE `mail` = :email';
        $stmt = $this->db->prepare($sql);
        $stmt->execute(['email' => $email]);
        return $res = $stmt->fetch(PDO::FETCH_ASSOC);
    }
}
