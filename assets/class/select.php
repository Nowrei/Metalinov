<?php

class Config {
    protected const DBHOST = 'localhost';
    protected const DBUSER = 'root';
    protected const DBPASS = '';
    protected const DBNAME = 'metalinov';

    protected $dsn = 'mysql:host=' . self::DBHOST . ';dbname=' . self::DBNAME . '';

    protected $conn = null;

    // Method for connection to the database
    public function __construct() {
      try {
        $this->conn = new PDO($this->dsn, self::DBUSER, self::DBPASS);
        $this->conn->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
      } catch (PDOException $e) {
        die('Error: ' . $e->getMessage());
      }
    }
  }

  class Database extends Config {

  //Select Email entreprise
    public function entreprise($mail) {
        $sql = "SELECT * FROM entreprise WHERE mail_entreprise = :mail_entreprise";
        $requete = $this->conn->prepare($sql);
        $requete->execute(array(
            "mail_entreprise" => $mail
        ));
        $result = $requete->fetchAll();
        return $result;
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

/* // Update Single User
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
  $sql = "DELETE FROM utilisateur WHERE id_utilisateur = :id_utilisateur";
  $stmt = $this->conn->prepare($sql);
  $stmt->execute(['id_utilisateur' => $id]);
  return true;
} */
}

?>