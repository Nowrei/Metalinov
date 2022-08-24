<?php

require_once '../class/config.php';

  class Base extends Config {

  //Select Email entreprise
    public function entreprise($mail) {
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

        //Select Email Postulant
    public function postulant($mail) {
      $sql = "SELECT * FROM postulant WHERE mail_postulant = :mail_postulant";
      $requete = $this->conn->prepare($sql);
      $requete->execute(array(
          "mail_postulant" => $mail
        ));
        $testmail = 0;
        while($resultat = $requete->fetch()) {

          if ($mail == $resultat['mail_postulant']) {

            $testmail = 1 ;
        }
    }
    return $testmail;
    
  }

  public function verif_postulant($mail) {
    $sql = "SELECT * FROM postulant WHERE mail_postulant = :mail_postulant";
    $requete = $this->conn->prepare($sql);
    $requete->execute(array(
        "mail_postulant" => $mail
      ));
      $count = $requete->rowCount();

      return $count;
  
}

// Fetch All Users From Database
public function read() {
  $sql = "SELECT * FROM commande ";
  $stmt = $this->conn->prepare($sql);
  $stmt->execute();
  $result = $stmt->fetchAll();
  return $result;
}

// Fetch Single User From Database
public function readOne($id) {
  $sql = "SELECT * FROM commande WHERE id_commande = :id_commande";
  $stmt = $this->conn->prepare($sql);
  $stmt->execute(['id_commande' => $id]);
  $result = $stmt->fetch();
  return $result;
}

// Update Single User
public function update($id, $pseudo, $mail, $password, $role) {
  
  $sql = "UPDATE utilisateur SET pseudo_utilisateur = :pseudo_utilisateur, mail_utilisateur = :mail_utilisateur, mdp_utilisateur = :mdp_utilisateur, role_utilisateur = :role_utilisateur WHERE id_utilisateur` = :id_utilisateur";
  $stmt = $this->conn->prepare($sql);
  $stmt->execute([
    ':pseudo_utilisateur' => $pseudo,
    ':mail_utilisateur' => $mail,
    ':mdp_utilisateur' => $password,
    ':role_utilisateur' => $role,
    ':id_utilisateur' => $id
  ]);

  return true;
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