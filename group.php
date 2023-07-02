<?php


include "db.php";
class Group{
    
    private $nom;
    private $e_mail;
    private $visio;

    public function __construct($nom, $e_mail, $visio) {
        
        $this->nom = $nom;
        $this->e_mail = $e_mail;
        $this->visio = $visio;
    }
    public function insertIntoDB(){
        $connexion = Db::Connection();
        // Préparation de la requête d'insertion
        $requete = $connexion->prepare('INSERT INTO groupe (nom,e_mail,visio) Values (:nom,:e_mail,:visio)');
    
        // Liaison des valeurs aux paramètres de la requête
        $requete->bindParam(':nom', $this->nom);
        $requete->bindParam(':e_mail', $this->e_mail);
        $requete->bindParam(':visio', $this->visio);

    
    
        // Exécution de la requête
        $requete->execute();
    
        // Fermeture de la connexion à la base de données
        $connexion = null;

    }

}