<?php 
require_once 'app/controller/controller_utilisateur.php';
$info_utilisateur = affichage_utilisateur_controleur($pdo);



echo '<div class="info_utilisateur">';
echo '<span class="info_vide">E-mail: </span>';
echo '<span class="info_vide">Nom: </span>';
echo '<span class="info_vide">Prenom:</span>';
echo '</div>';


echo '<div class="info_utilisateur">';
echo '<span class="info_ligne">' . $info_utilisateur['mail'] . '</span>';
echo '<span class="info_ligne">' . $info_utilisateur['nom'] . '</span>';
echo '<span class="info_ligne">' . $info_utilisateur['prenom'] . '</span>';
echo '</div>';