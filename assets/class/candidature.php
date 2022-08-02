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

  class Insert extends Config {

    public function candidature($adresse, $cp, $ville, $poste, $message, $fileName, $id) {
    //insertion candidature
  
  
            $sql = "INSERT INTO candidature (adresse_candidature, cp_candidature, ville_candidature, poste_candidature, message_candidature, cv_candidature, id_postulant) 
            VALUES (:adresse_candidature, :cp_candidature, :ville_candidature, :poste_candidature, :message_candidature, :cv_candidature, :id_postulant)";
            $requete= $bdd->prepare($sql);
            $requete->execute(array(
        ":adresse_candidature" => $adresse,
        ":cp_candidature" => $cp,
        ":ville_candidature" => $ville,
        ':poste_candidature' => $poste,
        ':message_candidature' => $message,
        ':cv_candidature' => $fileName,
        ':id_postulant' => $id
  
      )); 
    }
  
  
    
  }
  
  ?>