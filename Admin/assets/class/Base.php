<?php

  class Base extends Config {

  //Verification de présence ou non d'un email en BDD
    public function select($mail) {
      $sql="SELECT * FROM user WHERE mail_user = :mail_user";
      $requete= $this->conn->prepare($sql);
      $requete->execute(array(
          "mail_user" => $mail
      ));

  
      $testmail = 0;
          while($resultat = $requete->fetch()) {
  
            if ($mail == $resultat['mail_user']) {
  
              $testmail = 1 ;
          }
      }
      return $testmail;
      
    }

    public function verif_entreprise($mail) {
      $sql="SELECT * FROM entreprise WHERE mail_entreprise = :mail_entreprise";
      $requete= $this->conn->prepare($sql);
      $requete->execute(array(
          "mail_entreprise" => $mail
      ));

  
      $testmail = 0;
          while($resultat = $requete->fetch()) {
  
            if ($mail == $resultat['mail_entreprise']) {
  
              $testmail = 1 ;
          }
      }
      return $testmail;
      
    }


    // Fetch All Users From Database
    public function read() {
      $sql = "SELECT * FROM commande";
      $stmt = $this->conn->prepare($sql);
      $stmt->execute();
      $result = $stmt->fetchAll();
      return $result;
    }


// Delete User From Database
public function delete($id) {
  $sql = "DELETE FROM commande WHERE id_commande = :id_commande";
  $stmt = $this->conn->prepare($sql);
  $stmt->execute(['id_commande' => $id]);
  return true;
} 
}

?>