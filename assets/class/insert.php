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

}



?>