<!-- Dekstop -->
    <div id="menu_bannieres">
        
        <img src="img/logocorrect.svg" alt="logo" id="logo_img" onclick="window.location.href = 'index.php';" style="cursor:pointer;">    
        <a href="index.php" class="menu">Home</a>
        <a href="index.php?page=catalogue" class="menu">Catalogue</a>
        <a href="index.php?page=contact" class="menu">Contact</a>
        <a href="index.php?page=wishlist" class="menu">Wishlist</a>

            <?php if (!isset($_SESSION['loggedAs'])){ ?>
            <button id="btn_inscription" onclick="window.location.href='index.php?page=inscription';">M'inscrire</button>
            <?php } else{ ?>
                <a href="index.php?page=profil" class="logo_profil_menu">
                    <img src="img/profil2.svg" alt="logo profil" class="logo_profil_img">
                </a>


                <a href="index.php?page=wishlist" class="logo_wishlist_menu">
                    <img src="img/like.svg" alt="logo wishlist" class="logo_wishlist_img">
                </a>

                <a href="" class="logo_basket_menu">
                    <img src="img/basket.svg" alt="logo basket" class="logo_basket_img">
                </a>
            <?php }?>
    </div>

    <!-- Mobile -->
    <div id="menu_banniere_mobile">
    <!-- Logo -->
        <h2 id="titre_mobile" onclick="window.location.href='index.php';">Core-ect</h2>
        <img src="img/logocorrect.svg" alt="logo" id="logo_img_mobile" style="cursor:pointer;" >
    </div>




                <!-- Bloc affiché lors d'un clique  -->
                <div id="bloc_menu">


                <?php if(isset($_SESSION['loggedAs'])){ ?>
                <div class="conteneur_logo_mobile">             
                    <a href="index.php?page=profil" class="logo_profil_menu_mobile">
                        <img src="img/profil2.svg" alt="logo profil mobile" class="logo_profil_img_mobile">
                    </a>
                    <a href="index.php?page=wishlist" class="logo_wishlist_menu_mobile">
                        <img src="img/like.svg" alt="logo wishliste mobile" class="logo_wishlist_img_mobile">
                    </a>

                    <a href="" class="logo_basket_menu_mobile">
                        <img src="img/basket.svg" alt="logo basket mobile" class="logo_basket_img_mobile">
                    </a>
                </div>
                
                <?php } ?>


                <a href="index.php" class="menu">Home</a>
                <a href="index.php?page=catalogue" class="menu">Catalogue</a>
                <a href="index.php?page=contact" class="menu">Contact</a>
                <a href="index.php?page=wishlist" class="menu">Wishlist</a>

                <?php if(!isset($_SESSION['loggedAs'])){?>
                <button id="btn_inscription" onclick="window.location.href='index.php?page=inscription';">
                    M'inscrire</button>
                <?php } ?>

            </div>

    <div id="rond_suivi"></div>
    <script src="js/menu_squelette.js"></script>
    <script src="js/rond_suivi.js"></script>

