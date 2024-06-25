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
    <title>Me connecter</title>
    <link rel="stylesheet" href="css/me_connecter.css">
</head>
<body>
    <form action="index.php?page=me_connecter" method="POST">
    <div id="hero_section">

        <img src="img/se_connecter.png" alt="image_intro" id="image_intro_connecter" class="sous_section_hero">

        <div class="sous_section_hero" id="bloc_informations">
                <h2>Bienvenue chez</h2>
                <h2 id="nom_entreprise">Core-ect</h2>

            <div class="bloc_placeholder" id="bloc_placeholder_1">
                <label for="mail">E-mail </label>
                <input type="placeholder" name="mail" placeholder="Entrez votre e-mail">
            </div>

            <div class="bloc_placeholder">
                <label for="mdp">Mot de passe </label>
                <input type="placeholder" name="mdp" placeholder="Entrez votre mot de passe">
            </div>


            <div id="checkbox_se_souvenir">
                <input type="checkbox" id="checkbox_se_souvenir_input" name="checkbox_se_souvenir">
                <label for="checkbox_se_souvenir">Se souvenir de moi</label>
            </div>
        <button type="submit" name="submit" id="btn_login" onclick="window.location.href='index.php';">Login</button>
        </form>



            <div id="bloc_pas_compte">
                <p>Pas de compte ? <a href="index.php?page=inscription">M'enregistrer</a></p>
            </div>


        </div>

    </div>
</body>
</html>