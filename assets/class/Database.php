<?php

  class Database extends Config {



    public function insert($nom, $prenom, $role, $tel, $mail, $password) {
      //Insertion des données utilisateurs en BDD
    
    
      $sql = "INSERT INTO user (nom_user, prenom_user, telephone_user, mail_user, mdp_user, role_user) 
      VALUES (:nom_user, :prenom_user, :telephone_user, :mail_user, :mdp_user, :role_user)";
      $stmt = $this->conn->prepare($sql);
      $stmt->execute([
    
        ':nom_user' => $nom,
        ':prenom_user' => $prenom,
        ':telephone_user' => $tel,
        ':mail_user' => $mail,
        ':mdp_user' => $password,
        ':role_user' =>$role
    
      ]);
      return true;
      
    
      }
    // Insertion de la commande en BDD
    public function entreprise($commande, $adresse, $cp, $ville, $pays, $objet, $message, $id) {
     
        $sql = "INSERT INTO commande (entreprise_commande, adresse_commande, cp_commande, ville_commande, pays_commande, objet_commande, message_commande, id_user) 
        VALUES (:nom_commande, :adresse_commande, :cp_commande, :ville_commande, :pays_commande, :objet_commande, :message_commande, :id_user)";
        $stmt = $this->conn->prepare($sql);
        $stmt->execute([

          ':nom_commande' => $commande,
          ':adresse_commande' => $adresse,
          ':cp_commande' => $cp,
          ':ville_commande' => $ville,
          ':pays_commande' => $pays,
          ':objet_commande' => $objet,
          ':message_commande' => $message,
          ':id_user' => $id
      
        ]);
        return true;
      }

  public function candidature($adresse, $cp, $ville, $message, $fileName, $id) {
    //Insertion des candidatures en BDD


    $sql = "INSERT INTO candidature (adresse_candidature, cp_candidature, ville_candidature, message_candidature, cv_candidature, id_user) 
            VALUES (:adresse_candidature, :cp_candidature, :ville_candidature, :message_candidature, :cv_candidature, :id_user)";
    $stmt = $this->conn->prepare($sql);
    $stmt->execute([

      ':adresse_candidature' => $adresse,
      ':cp_candidature' => $cp,
      ':ville_candidature' => $ville,
      ':message_candidature' => $message,
      ':cv_candidature' => $fileName,
      ':id_user' => $id

    ]);
    return true;
  }
}

?>