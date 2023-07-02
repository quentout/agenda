<?php


include "db.php";
class Evenement{
    
    
    private $nom_event;
    private $debut_event;
    private $fin_event;
    private $description;
    private $lieux;
    private $intervenant;
    private $visio;
    private $recursif;
    private $rappel_event;
    private $id_revent;

    public function __construct($nom_event,$debut_event,$fin_event,$description,$lieux,$intervenant,$visio,$recursif,$rappel_event,$id_revent) {
        

        
        $this->nom_event = $nom_event;
        $this->debut_event = $debut_event;
        $this->fin_event = $fin_event;
        $this->description = $description;
        $this->lieux = $lieux;
        $this->intervenant = $intervenant;
        $this->visio = $visio;
        $this->recursif = $recursif;
        $this->rappel_event = $rappel_event;
        $this->id_revent = $id_revent;
    }
    public function insertIntoDB(){
        $connexion = Db::Connection();


        $requete = $connexion->prepare('INSERT INTO evenement (,nom_event,debut_event,fin_event,description,lieux,intervenant,visio,recursif,rappel_event,id_revent) Values (:nom_event,:debut_event,:fin_event,:description,:lieux,:intervenant,:visio,:recursif,:rappel_event,:id_revent)');
    
    

        $requete->bindParam(':nom_event', $this->nom_event);
        $requete->bindParam(':debut_event', $this->debut_event);
        $requete->bindParam(':fin_event', $this->fin_event);
        $requete->bindParam(':description', $this->description);
        $requete->bindParam(':lieux', $this->lieux);
        $requete->bindParam(':intervenant', $this->intervenant);
        $requete->bindParam(':visio', $this->visio);
        $requete->bindParam(':recursif', $this->recursif);
        $requete->bindParam(':rappel_event', $this->rappel_event);
        $requete->bindParam(':id_revent', $this->id_revent);

    
        $requete->execute();
    

        $connexion = null;

    }

}

