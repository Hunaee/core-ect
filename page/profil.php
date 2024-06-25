<h1>Profil</h1>


<div class="bloc_utilisateur">
    <?php
        require 'app/vue/utilisateur/affichage_utilisateur.php'
    ?>


    <div class="bloc_image_upload">
        <?php require 'app/vue/article/article_utilisateur_affichage.php'; ?>
    </div>
</div>

<form action="" method="get">
    <input type="hidden" name="page" value="deconnexion">
    <button class="btn_deconnecter" type="submit">Se déconnecter</button>
</form>

