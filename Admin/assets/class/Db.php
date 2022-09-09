<?php


  class Db extends Config {
    // Insert User Into Database
    public function insert($nom, $prenom, $phone, $mail, $password, $role) {
      $password = password_hash( $password, PASSWORD_DEFAULT);   
      $sql = "INSERT INTO user (nom_user, prenom_user, telephone_user, mail_user, mdp_user, role_user) 
      VALUES (:nom_user, :prenom_user, :telephone_user, :mail_user, :mdp_user, :role_user)";
      $stmt = $this->conn->prepare($sql);
      $stmt->execute([
    
      ":nom_user" => $nom,
      ":prenom_user" => $prenom,
      ":telephone_user" => $phone,
      ':mail_user' => $mail,
      ':mdp_user' => $password,
      ':role_user' => $role
    
      ]);
      return true;
    }
    // Fetch All Users From Database
    public function read() {
      $sql = "SELECT * FROM user";
      $stmt = $this->conn->prepare($sql);
      $stmt->execute();
      $result = $stmt->fetchAll();
      return $result;
    }
    

    // Fetch Single User From Database
    public function readOne($id) {
      $sql = "SELECT * FROM user WHERE id_user = :id";
      $stmt = $this->conn->prepare($sql);
      $stmt->execute(['id' => $id]);
      $result = $stmt->fetch();
      return $result;
    }

    // Update Single User
    public function update($id, $nom, $prenom, $phone, $mail, $password, $role) {
      
      $sql = "UPDATE user SET nom_user = :nom_user, prenom_user = :prenom_user, telephone_user = :telephone_user, mail_user = :mail_user, mdp_user = :mdp_user, role_user = :role_user 
      WHERE user.id_user = :id_user";
      $stmt = $this->conn->prepare($sql);
      $stmt->execute([
        ':nom_user' => $nom,
        ':prenom_user' => $prenom,
        ':telephone_user' => $phone,
        ':mail_user' => $mail,
        ':mdp_user' => $password,
        ':role_user' => $role,
        ':id_user' => $id
      ]);

      return true;
    }

    // Delete User From Database
    public function delete($id) {
      $sql = "DELETE FROM user WHERE id_user = :id_user";
      $stmt = $this->conn->prepare($sql);
      $stmt->execute(['id_user' => $id]);
      return true;
    }


    public function readCandidature() {
      $sql = "SELECT * FROM candidature";
      $stmt = $this->conn->prepare($sql);
      $stmt->execute();
      $result = $stmt->fetchAll();
      return $result;
    }

    public function deleteCandidature($id) {
      $sql = "DELETE FROM candidature WHERE id_candidature = :id_candidature";
      $stmt = $this->conn->prepare($sql);
      $stmt->execute(['id_candidature' => $id]);
      return true;
    }
    

  }

?>