<?php


  class Db extends Config {
    // Insert User Into Database
    public function insert($nom, $prenom, $phone, $mail, $password, $role) {
      $password = password_hash( $password, PASSWORD_DEFAULT);   
      $sql = "INSERT INTO postulant (nom_postulant, prenom_postulant, telephone_postulant, mail_postulant, mdp_postulant, role_utilisateur) 
      VALUES (:nom_postulant, :prenom_postulant, :telephone_postulant, :mail_postulant, :mdp_postulant, :role_utilisateur)";
      $stmt = $this->conn->prepare($sql);
      $stmt->execute([
    
      ":nom_postulant" => $nom,
      ":prenom_postulant" => $prenom,
      ":telephone_postulant" => $phone,
      ':mail_postulant' => $mail,
      ':mdp_postulant' => $password,
      ':role_utilisateur' => $role
    
      ]);
      return true;
    }
    // Fetch All Users From Database
    public function read() {
      $sql = "SELECT * FROM postulant";
      $stmt = $this->conn->prepare($sql);
      $stmt->execute();
      $result = $stmt->fetchAll();
      return $result;
    }
    

    // Fetch Single User From Database
    public function readOne($id) {
      $sql = "SELECT * FROM postulant WHERE id_postulant = :id";
      $stmt = $this->conn->prepare($sql);
      $stmt->execute(['id' => $id]);
      $result = $stmt->fetch();
      return $result;
    }

    // Update Single User
    public function update($id, $nom, $prenom, $phone, $mail, $password, $role) {
      
      $sql = "UPDATE postulant SET pseudo_postulant = :pseudo_postulant, mail_postulant = :mail_postulant, mdp_postulant = :mdp_postulant, role_utilisateur = :role_utilisateur WHERE id_postulant` = :id_postulant";
      $stmt = $this->conn->prepare($sql);
      $stmt->execute([
        ':nom_postulant' => $nom,
        ':prenom_postulant' => $prenom,
        ':telephone_postulant' => $phone,
        ':mail_postulant' => $mail,
        ':mdp_postulant' => $password,
        ':role_utilisateur' => $role,
        ':id_postulant' => $id
      ]);

      return true;
    }

    // Delete User From Database
    public function delete($id) {
      $sql = "DELETE FROM postulant WHERE id_postulant = :id_postulant";
      $stmt = $this->conn->prepare($sql);
      $stmt->execute(['id_postulant' => $id]);
      return true;
    }
  }

?>