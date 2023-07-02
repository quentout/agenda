<?php

include "db.php";
class User {
    
    private $nom;
    private $prenom;
    private $e_mail;
    private $password;
    private $langue;
    private $role;
    private $classe;
    
    public function __construct($nom, $prenom, $e_mail, $password, $langue, $role, $classe) {
        
        $this->nom = $nom;
        $this->prenom = $prenom;
        $this->e_mail = $e_mail;
        $this->password = $password;
        $this->langue = $langue;
        $this->role = $role;
        $this->classe = $classe;
    }


    public function insertIntoDB(){
        $connexion = Db::Connection();
 
        $requete = $connexion->prepare('INSERT INTO users (nom, prenom, e_mail, password, langue, role, classe) VALUES (:nom, :prenom, :e_mail, :password, :langue, :role, :classe)');
    

        
        $requete->bindParam(':nom', $this->nom);
        $requete->bindParam(':prenom', $this->prenom);
        $requete->bindParam(':e_mail', $this->e_mail);
        $requete->bindParam(':password', $this->password);
        $requete->bindParam(':langue', $this->langue);
        $requete->bindParam(':role', $this->role);
        $requete->bindParam(':classe', $this->classe);

    
    
        // Exécution de la requête
        $requete->execute();
    
        // Fermeture de la connexion à la base de données
        $connexion = null;
}
}