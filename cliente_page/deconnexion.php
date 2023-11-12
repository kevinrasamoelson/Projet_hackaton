<?php
include('config.php');
session_start();

// Déconnexion de l'utilisateur
if (isset($_SESSION['ID'])) {
    // Effacer toutes les données de session
    session_unset();

    // Détruire la session
    session_destroy();

    // Rediriger vers la page de connexion après la déconnexion
    header('Location: ../boulangerie/index.php');
    exit();
} else {
    // Si l'utilisateur n'est pas connecté, rediriger vers la page de connexion
    header('Location: ../inscription_client/inscription.php');
    echo "tafavoaka";
    exit();
}
?>
