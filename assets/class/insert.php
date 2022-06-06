<?php

class ville
{
    public function __construct()
    {
        $db = new DatabaseConnection;
        $this->conn = $db->conn;
    }

    public function create($inputData)
    {
        $nom = $inputData['nom'];
        $prenom = $inputData['prenom'];
        $societe = $inputData['societe'];
        $phone = $inputData['phone'];
        $email = $inputData['email'];
        $adresse = $inputData['adresse'];
        $code = $inputData['code'];
        $ville = $inputData['ville'];
        $pays = $inputData['pays'];
        $objet = $inputData['objet'];
        $message = $inputData['message'];
        

        $villeQuery = "INSERT INTO contact (nom_contact,prenom_contact,societe_contact,telephone_contact,email_contact, adresse_contact,cp_contact,ville_contact,pays_contact,objet_contact,message_contact) 
        VALUES ('$nom','$prenom','$societe','$phone','$email','$adresse','$code','$ville','$pays','$objet','$message')";
        $result = $this->conn->query($villeQuery);
        if($result){
            return true;
        }else{
            return false;
        }
    }
}
