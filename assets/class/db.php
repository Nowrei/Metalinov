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
    // Insert User Into Database
    public function insert($nom, $prenom, $entreprise, $mail, $password) {
      $password = password_hash( $password, PASSWORD_DEFAULT);   
      $sql = "INSERT INTO entreprise (nom_entreprise, prenom_entreprise, entreprise_entreprise, mail_entreprise, mdp_entreprise) 
      VALUES (:nom_entreprise, :prenom_entreprise, :entreprise_entreprise, :mail_entreprise, :mdp_entreprise)";
      $stmt = $this->conn->prepare($sql);
      $stmt->execute([
        ':nom_entreprise' => $nom,
        ':prenom_entreprise' => $prenom,
        ':entreprise_entreprise' => $entreprise,
        ':mail_entreprise' =>$mail,
        ':mdp_entreprise' =>$password
    
      ]);
      return true;
    }

        // Fetch All Users From Database
        public function lire() {
          $sql = "SELECT * FROM commande WHERE id_commande = :id";
          $stmt = $this->conn->prepare($sql);
          $stmt->execute();
          $result = $stmt->fetchAll();
          return $result;
    
        }

    // Fetch All Users From Database
    public function read() {
      $sql = "SELECT * FROM commande";
      $stmt = $this->conn->prepare($sql);
      $stmt->execute();
      $result = $stmt->fetchAll();
      return $result;

    }

    // Fetch Single User From Database
    public function readOne($id) {
      $sql = "SELECT * FROM utilisateur WHERE id_utilisateur = :id";
      $stmt = $this->conn->prepare($sql);
      $stmt->execute(['id' => $id]);
      $result = $stmt->fetch();
      return $result;
    }
}





?>