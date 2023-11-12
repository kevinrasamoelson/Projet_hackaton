<?php
require_once 'Database.php';

class User
{
    private $nom;
    private $email;
    private $code_admine;
    private $mots_de_passe;
    private $confi_psr;
    private $newPassword;
    private $db;

    public function __construct($nom, $email, $code_admine, $mots_de_passe, $confi_psr,$newPassword, $db)
    {
        $this->nom = $nom;
        $this->email = $email;
        $this->code_admine = $code_admine;
        $this->mots_de_passe = $mots_de_passe;
        $this->confi_psr = $confi_psr;
        $this->newPassword = $newPassword;
        $this->db = $db;
    }

    public function register()
    {
        $sql = "INSERT INTO admine (nom, email, code_admine, mots_de_passe) VALUES ('$this->nom', '$this->email', '$this->code_admine', '$this->mots_de_passe')";
        if ($this->db->connection->query($sql) === TRUE) {
            echo "Inscription Réussie";
        } else {
            echo "Error: " . $sql . "<br>" . $this->db->connection->error;
        }
    }

    public function login()
    {
        $sql = "SELECT * FROM admine WHERE email = '$this->email' AND code_admine = '$this->code_admine' AND mots_de_passe = '$this->mots_de_passe'";
        $result = $this->db->connection->query($sql);
        if ($result->num_rows > 0) {
            return true;
        } else {
            return false;
        }
    }

    public function resetPassword($email, $newPassword)
    {
        $sql = "UPDATE admine SET password = '$newPassword' WHERE email = '$email'";
        if ($this->db->connection->query($sql) === TRUE) {
            echo "Le mot de passe a été réinitialisé avec succès.";
        } else {
            echo "Erreur lors de la réinitialisation du mot de passe: " . $this->db->error;
        }
    }
}
?>
