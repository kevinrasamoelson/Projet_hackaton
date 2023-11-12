<?php
require_once 'Database.php';
require_once 'User.php';

if (isset($_POST['register'])) {
    $db = new Database();
    $user = new User($_POST['nom'], $_POST['email'], $_POST['code_admine'], $_POST['mots_de_passe'], $_POST['confi_psr'], '', $db); // Ajout d'une chaîne vide pour le nouveau mot de passe
    if ($_POST['mots_de_passe'] === $_POST['confi_psr']) {
        $user->register();
        header('Location: http://localhost/Boulangerie/dashadm/dist/');  // Correction ici, pas d'espace après 'Location'
        exit();
    } else {
        echo 'Erreur, veuillez confirmer correctement votre mot de passe.';
    }
}
?>
