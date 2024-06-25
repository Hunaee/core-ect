
<!-- Partie principale -->
   <div id="hero_section">
            <div id="sous_section_1">
                        <h2 id="titre">Core-ect</h2>
                        <h2 id="sous_titre" class="bloc_sous_section_3">Recherche et vends des <br>interrogations</h2>
                        <p class="bloc_sous_section_3">Core-ect est une plateforme permettant <br> d’acheter ou de revendre des interrogations <br> à destination des professeurs.</p>

                    <div id="btns_hero">
                            <button class="btn_duo" onclick="window.location.href='index.php?page=catalogue';">Catalogue</button>

                        <?php if(!isset($_SESSION['loggedAs'])){ ?>
                            <button class="btn_duo" id="btn_se_connecter" onclick="window.location.href='index.php?page=me_connecter';">Me connecter</button>
                        <?php } ?>  
                   </div>
            </div>


            <div id="sous_section_2">
                <img src="img/intro_home.jpg" alt="professeur_eleve_classe" id="img_intro_home">
            </div>
    </div>

    <!-- Bloc bottom -->
    <div id="bloc_secondaire">
        <div class="item">
        <p>Communauté</p>
        <p class="sous_item">Active</p>
        </div>
        
        <div class="item">
        <p>Clients satisfaits</p>
        <p class="sous_item">96%</p>
        </div>

        <div class="item">
        <p>Utilisation</p>
        <p class="sous_item">Intuitive</p>
        </div>

        <div class="item">
        <p>Interrogations</p>
        <p class="sous_item">134</p>
        </div>
    </div>