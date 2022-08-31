<?php

  class Database extends Config {



    public function insert($nom, $prenom, $role, $tel, $mail, $password) {
      //Insertion user
    
    
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
    // Insertion entreprise entreprise
    public function entreprise($entreprise, $adresse, $cp, $ville, $pays, $objet, $message, $id) {
     
        $sql = "INSERT INTO entreprise (nom_entreprise, adresse_entreprise, cp_entreprise, ville_entreprise, pays_entreprise, objet_entreprise, message_entreprise, id_user) 
        VALUES (:nom_entreprise, :adresse_entreprise, :cp_entreprise, :ville_entreprise, :pays_entreprise, :objet_entreprise, :message_entreprise, :id_user)";
        $stmt = $this->conn->prepare($sql);
        $stmt->execute([

          ':nom_entreprise' => $entreprise,
          ':adresse_entreprise' => $adresse,
          ':cp_entreprise' => $cp,
          ':ville_entreprise' => $ville,
          ':pays_entreprise' => $pays,
          ':objet_entreprise' => $objet,
          ':message_entreprise' => $message,
          ':id_user' => $id
      
        ]);
        return true;
      }

  public function candidature($adresse, $cp, $ville, $message, $fileName, $id) {
    //Insertion candidature


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