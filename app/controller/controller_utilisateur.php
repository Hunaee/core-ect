<?php
// controllers/userController.php

require_once 'app/modele/modele_utilisateur.php';

function gestion_user_res($pdo) {
    $page = isset($_GET['page']) ? $_GET['page'] : '';
    switch ($page) {
        case 'inscription':
            inscription($pdo);
            break;
        case 'me_connecter':
            connecter($pdo);
            break;
        case 'deconnexion':
            deconnecter();
            header('Location:index.php');
            break;
        case 'profil':
            affichage_utilisateur_controleur($pdo);
            break;
    }
}

function inscription($pdo)
{
    $user = new User($pdo);
    $_SESSION['variable_erreur'] = '';


    if (isset($_POST['submit'])) {
        $errors = [];
        if ($_POST['password'] !== $_POST['confirmer_password'] || $_POST['confirmer_password'] == 0 || empty($_POST['confirmer_password'])) {
            $errors[] = "Les mots de passe ne correspondent pas.";
        }
    
        if (!isset($_POST['check_box_conditions'])) {
            $errors[] = "Vous devez accepter les conditions générales.";
        }
    
        if (empty($_POST['prenom']) || empty($_POST['nom'])) {
            $errors[] = "Vous n'avez pas rempli votre nom ou prénom.";
        }
    
        if (!empty($errors)) {
            $_SESSION['variable_erreur'] = implode('<br>', $errors);

        } else {
            try {
                $user->inscription($_POST['mail'], $_POST['password'], $_POST['nom'], $_POST['prenom']);
                header('Location: index.php');
                exit();
            } catch (PDOException $e) {
                $_SESSION['variable_erreur'] = "Erreur dans l'inscription ! Auriez-vous déjà un compte ?";
            }
        }
    }
    
}

function connecter($pdo)
{
    $utilisateur = new User($pdo);
    if (isset($_POST['submit'])) {
        if ($utilisateur->peut_se_connecter($_POST['mail'], $_POST['mdp'])) {

            $_SESSION['id_utilisateur'] = $utilisateur->id_utilisateur($_POST['mail']);
            $_SESSION['loggedAs'] = $_POST['mail'];
            header('Location: index.php');
            exit;
        } else {
            echo "Erreur dans la connexion!";
        }
    } 
}

function affichage_utilisateur_controleur($pdo){
    if (!isset($_SESSION['loggedAs'])) {
        header('Location: index.php?page=me_connecter');
        exit();
    }

    $utilisateur = new User($pdo);
    
    return $utilisateur->affichage_utilisateur($_SESSION['loggedAs']);
}





function deconnecter()
{
    unset($_SESSION['loggedAs']);
    header('Location: index.php');
}


// function home()
// {
//     if (isset($_SESSION['loggedAs'])) {
//         include 'views/home.php';
//     } else {
//         include 'views/login.php';
//     }
// }



?>
