<?php

require_once '../class/config.php';


  class Database extends Config {



    public function entreprise($nom, $prenom, $entreprise, $mail, $tel, $password) {
      //Insertion postulant
    
    
      $sql = "INSERT INTO entreprise (nom_entreprise, prenom_entreprise, entreprise_entreprise, telephone_entreprise, mail_entreprise, mdp_entreprise, role_utilisateur) 
      VALUES (:nom_entreprise, :prenom_entreprise, :entreprise_entreprise, :telephone_entreprise, :mail_entreprise, :mdp_entreprise, '0')";
      $stmt = $this->conn->prepare($sql);
      $stmt->execute([
    
        ":nom_entreprise" => $nom,
        ":prenom_entreprise" => $prenom,
        ":entreprise_entreprise" => $entreprise,
        ":telephone_entreprise" => $tel,
        ":mail_entreprise" => $mail,
        "mdp_entreprise" => $password
    
      ]);
      return true;
      
    
      }


    public function postulant($nom, $prenom, $tel, $mail, $password) {
      //Insertion postulant
    
    
      $sql = "INSERT INTO postulant (nom_postulant, prenom_postulant, telephone_postulant, mail_postulant, mdp_postulant, role_utilisateur) 
      VALUES (:nom_postulant, :prenom_postulant, :telephone_postulant, :mail_postulant, :mdp_postulant, '1')";
      $stmt = $this->conn->prepare($sql);
      $stmt->execute([
    
        ":nom_postulant" => $nom,
      ":prenom_postulant" => $prenom,
      ":telephone_postulant" => $tel,
      ':mail_postulant' => $mail,
      ':mdp_postulant' => $password
    
      ]);
      return true;
      
    
      }
    // Insertion commande entreprise
    public function insert($adresse, $cp, $ville, $pays, $objet, $message, $id) {
     
        $sql = "INSERT INTO commande (adresse_commande, cp_commande, ville_commande, pays_commande, objet_commande, message_commande, id_entreprise) 
        VALUES (:adresse_commande, :cp_commande, :ville_commande, :pays_commande, :objet_commande, :message_commande, :id_entreprise)";
        $stmt = $this->conn->prepare($sql);
        $stmt->execute([

          ':adresse_commande' => $adresse,
          ':cp_commande' => $cp,
          ':ville_commande' => $ville,
          ':pays_commande' => $pays,
          ':objet_commande' => $objet,
          ':message_commande' => $message,
          ':id_entreprise' => $id
      
        ]);
        return true;
      }

  public function candidature($adresse, $cp, $ville, $poste, $message, $fileName, $id) {
  //Insertion candidature


  $sql = "INSERT INTO candidature (adresse_candidature, cp_candidature, ville_candidature, poste_candidature, message_candidature, cv_candidature, id_postulant) 
            VALUES (:adresse_candidature, :cp_candidature, :ville_candidature, :poste_candidature, :message_candidature, :cv_candidature, :id_postulant)";
  $stmt = $this->conn->prepare($sql);
  $stmt->execute([

    ':adresse_candidature' => $adresse,
    ':cp_candidature' => $cp,
    ':ville_candidature' => $ville,
    ':poste_candidature' => $poste,
    ':message_candidature' => $message,
    ':cv_candidature' => $fileName,
    ':id_postulant' => $id

  ]);
  return true;
  

  }
  
}

?>