<?php
if(isset($_SESSION['loggedAs'])){
    header('Location:index.php');
    exit;
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inscription</title>
    <link rel="stylesheet" href="css/inscription.css">
</head>
<body>
    <div id="img_background"><img src="img/tel_trotinette.png" alt="tel_trotinette"></div>

    <h2>M'inscrire</h2>
    <form action="index.php?page=inscription" method="POST">
        <div id="hero_section">
            <div id="nom_prenom">
                    <div class="bloc_label_and_input">
                        <label for="nom">Nom </label>
                        <input type="text" name="nom" placeholder="Entrez votre nom">
                    </div>

                    <div class="bloc_label_and_input">
                        <label for="prenom">Prénom </label>
                        <input type="text" name="prenom" placeholder="Entrez votre prénom">
                    </div>
            </div>

            <div class="bloc_label_and_input">
                    <label for="mail">Mail </label>
                    <input type="text" name="mail" placeholder="Entrez votre mail">
                </div>
                <div class="bloc_label_and_input">
                    <label for="password">Mot de passe </label>
                    <input type="password" name="password" placeholder="Entrez un mot de passe">
                </div>



                <div class="bloc_label_and_input">
                    <label for="confirmer_password">Confirmer votre mot de passe </label>
                    <input type="password" name="confirmer_password" placeholder="Confirmer votre mot de passe">
                </div>

                <div id="check_box_bloc">
                    <input type="checkbox" id="check_box_conditions" name="check_box_conditions">
                    <label for="check_box_conditions">J'ai lu et j'accepte les conditions générales</label>
                </div>
                <?php
                echo $_SESSION['variable_erreur'] . '<br>';
                ?>
                <button type="submit" name="submit" value="Register" id="btn_confirm" onclick="window.location.href='index.php';" style="cursor: pointer;">></button>

                <div id="bloc_deja_compte">
                    <p>Déjà un compte ? <a href="index.php?page=me_connecter">Me connecter</a></p>
                </div>
                </form>

        </div>



</body>
</html>