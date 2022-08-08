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
    // Insertion commande entreprise
    public function insert($entreprise, $phone, $mail, $adresse, $cp, $ville, $pays, $objet, $message, $id) {
     
        $sql = "INSERT INTO commande (entreprise_commande, telephone_commande, mail_commande, adresse_commande, cp_commande, ville_commande, pays_commande, objet_commande, message_commande, id_entreprise) 
        VALUES (:entreprise_commande, :telephone_commande, :mail_commande, :adresse_commande, :cp_commande, :ville_commande, :pays_commande, :objet_commande, :message_commande, :id_entreprise)";
        $stmt = $this->conn->prepare($sql);
        $stmt->execute([
          ':entreprise_commande' => $entreprise,
          ':telephone_commande' => $phone,
          ':mail_commande' => $mail,
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

      public function postulant($nom, $prenom, $tel, $mail, $password) {
        //Insertion postulant
      
      
        $sql = "INSERT INTO postulant (nom_postulant, prenom_postulant, telephone_postulant, mail_postulant, mdp_postulant, role_utilisateur) 
        VALUES (:nom_postulant, :prenom_postulant, :telephone_postulant, :mail_postulant, :mdp_postulant, '1')";
        $stmt = $this->conn->prepare($sql);
        $stmt->execute([
      
          ":nom_postulant" => $nom,
        ":prenom_postulant" => $prenom,
        ":telephone_postulant" => $tel,
        ':mail_postulant' => $mail,
        ':mdp_postulant' => $password
      
        ]);
        return true;
        
      
        }


  public function candidature($adresse, $cp, $ville, $poste, $message, $fileName, $id) {
  //Insertion candidature


  $sql = "INSERT INTO candidature (adresse_candidature, cp_candidature, ville_candidature, poste_candidature, message_candidature, cv_candidature, id_postulant) 
            VALUES (:adresse_candidature, :cp_candidature, :ville_candidature, :poste_candidature, :message_candidature, :cv_candidature, :id_postulant)";
  $stmt = $this->conn->prepare($sql);
  $stmt->execute([

    ':adresse_candidature' => $adresse,
    ':cp_candidature' => $cp,
    ':ville_candidature' => $ville,
    ':poste_candidature' => $poste,
    ':message_candidature' => $message,
    ':cv_candidature' => $fileName,
    ':id_postulant' => $id

  ]);
  return true;
  

  }
  
}

?>