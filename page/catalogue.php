
    <div id="items_avant_hero"> 
        <div id="partie_gauche_top">
                <div id="breadcrumbs_items">
                    <a href="index.php" class="breadcrumbs">Home</a>
                    <p class="breadcrumbs">></p>
                    <a href="index.php?page=catalogue" class="breadcrumbs">Catalogue</a>
                </div>
                   <h2 id="titre_page"> Catalogue</h2>
        </div>
        <input type="text" class="sous_items_avant_hero" placeholder="🔎 Search...">
    </div>

    <!-- Filtre mobile -->
    <div id="filtre_mobile_bloc">
        <p class="filtre_titre_mobile">Filtres</p>
        <div id="bloc_filtrage_mobile">
            <h4>Catégories</h4>
            <?php require 'app/vue/categorie/liste.php';?>



            <h4>Thèmes</h4>
            <?php require 'app/vue/theme/liste.php'; ?>

        </div>
    </div>


<div id="hero_section">
    <div id="filtre" class="hero_section_item">

        <h4 class="sous_titre_filtre" id="categorie_filtre">Catégories</h4>
            <?php require 'app/vue/categorie/liste.php'; ?>



        <h4 class="sous_titre_filtre" id="theme_filtre">Thèmes</h4>
        <?php require 'app/vue/theme/liste.php'; ?>

   </div>


    <div id="produits" class="hero_section_item">

        <div class="bloc_produit">
        <a class="bloc_image" href="index.php?page=produit" style="cursor: pointer;">

            <button type="button" class="btn_like" onclick="Toggle(event)" ></button>
        </a>
        <span>
            <p class="categorie_produit"> Primaire </p> 
            <p class="theme_produit"> Mathématique </p>
            <p class="prix_produit"> 9,99€ </p>
        </span>
        </div>


        <div class="bloc_produit">
            <div class="bloc_image" onclick="window.location.href='index.php?page=produit';" style="cursor: pointer;">
                <button class="btn_like" onclick="Toggle()"></button>
</div>

                <span>
                    <p class="categorie_produit"> Université </p> 
                    <p class="theme_produit"> Science </p>
                    <p class="prix_produit"> 19,99€ </p>
                </span>
        </div>
        <div class="bloc_produit">
            <div class="bloc_image" onclick="window.location.href='index.php?page=produit';" style="cursor: pointer;">
            <button class="btn_like" onclick="Toggle()"></button>
        </div>

                <span>
                    <p class="categorie_produit"> Maternelle </p> 
                    <p class="theme_produit"> EPS </p>
                    <p class="prix_produit"> 5,99€ </p>
                </span>
        </div>

        <div class="bloc_produit">
            <div class="bloc_image" onclick="window.location.href='index.php?page=produit';" style="cursor: pointer;">
            <button class="btn_like" onclick="Toggle()"></button>
</div>
    
                <span>
                    <p class="categorie_produit"> Secondaire <span> 
                    <p class="theme_produit"> Histoire </p>
                    <p class="prix_produit"> 12,99€ </p>
                </span>
        </div>
        
        <div class="bloc_produit">
            <div class="bloc_image" onclick="window.location.href='index.php?page=produit';" style="cursor: pointer;">
            <button class="btn_like" onclick="Toggle()"></button></div>

                <span>
                    <p class="categorie_produit"> Haute Ecole </p> 
                    <p class="theme_produit"> Langue </p>
                    <p class="prix_produit"> 12,99€ </p>
                </span>
        </div>

        <div class="bloc_produit">
            <div class="bloc_image" onclick="window.location.href='index.php?page=produit';" style="cursor: pointer;">
            <button class="btn_like" onclick="Toggle()"></button>
</div>

                <span>
                    <p class="categorie_produit"> Université </p> 
                    <p class="theme_produit"> Mathématique </p>
                    <p class="prix_produit"> 22,99€ </p>
                </span>
        </div>


        <div class="bloc_produit">
            <div class="bloc_image" onclick="window.location.href='index.php?page=produit';" style="cursor: pointer;">
            <button class="btn_like" onclick="Toggle()"></button>
</div>

                <span>
                    <p class="categorie_produit"> Secondaire </p> 
                    <p class="theme_produit"> Mathématique </p>
                    <p class="prix_produit"> 9,99€ </p>
                </span>
        </div>


        <div class="bloc_produit">
            <div class="bloc_image" onclick="window.location.href='index.php?page=produit';" style="cursor: pointer;">
            <button class="btn_like" onclick="Toggle()"></button>
</div>

                <span>
                    <p class="categorie_produit"> Primaire </p> 
                    <p class="theme_produit"> Mathématique </p>
                    <p class="prix_produit"> 19,99€ </p>
                </span>
        </div>


        <div class="bloc_produit">
            <div class="bloc_image" onclick="window.location.href='index.php?page=produit';" style="cursor: pointer;">
            <button class="btn_like" onclick="Toggle()"></button>
</div>

                <span>
                    <p class="categorie_produit"> Haute Ecole </p> 
                    <p class="theme_produit"> Français </p>
                    <p class="prix_produit"> 19,99€ </p>
                </span>
        </div>


        <div class="bloc_produit">
            <div class="bloc_image" onclick="window.location.href='index.php?page=produit';" style="cursor: pointer;">
            <button class="btn_like" onclick="Toggle()"></button>
</div>

                <span>
                    <p class="categorie_produit"> Secondaire </p> 
                    <p class="theme_produit"> Science </p>
                    <p class="prix_produit"> 10,99€ </p>
                </span>
        </div>


        <div class="bloc_produit">
            <div class="bloc_image" onclick="window.location.href='index.php?page=produit';" style="cursor: pointer;">
            <button class="btn_like" onclick="Toggle()"></button>
</div>

                <span>
                    <p class="categorie_produit"> Maternelle </p> 
                    <p class="theme_produit"> Langue </p>
                    <p class="prix_produit"> 5,99€ </p>
                </span>
        </div>


        <div class="bloc_produit">
            <div class="bloc_image" onclick="window.location.href='index.php?page=produit';" style="cursor: pointer;">
            <button class="btn_like" onclick="Toggle()"></button>
</div>

                <span>
                    <p class="categorie_produit"> Primaire </p> 
                    <p class="theme_produit"> Géographie </p>
                    <p class="prix_produit"> 4,99€ </p>
                </span>
        </div>


        <div class="bloc_produit">
            <div class="bloc_image" onclick="window.location.href='index.php?page=produit';" style="cursor: pointer;">
            <button class="btn_like" onclick="Toggle()"></button>
</div>

                <span>
                    <p class="categorie_produit"> Université </p> 
                    <p class="theme_produit"> Religions </p>
                    <p class="prix_produit"> 21,99€ </p>
                </span>
        </div>

        <div class="bloc_produit">
            <div class="bloc_image" onclick="window.location.href='index.php?page=produit';" style="cursor: pointer;">
            <button class="btn_like" onclick="Toggle()"></button>
</div>

                <span>
                    <p class="categorie_produit"> Secondaire </p> 
                    <p class="theme_produit"> Français </p>
                    <p class="prix_produit"> 5,99€ </p>
                </span>
        </div>

        <div class="bloc_produit">
            <div class="bloc_image" onclick="window.location.href='index.php?page=produit';" style="cursor: pointer;">
            <button class="btn_like" onclick="Toggle()"></button>
</div>

                <span>
                    <p class="categorie_produit"> Haute Ecole </p> 
                    <p class="theme_produit"> Géographie </p>
                    <p class="prix_produit"> 12,99€ </p>
                </span>
        </div>


    </div>
 


    
    <script src="js/catalogue.js"></script>

