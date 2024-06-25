<?php



?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Upload d'images</title>
    <script>
        // Reload le formulaire
        window.addEventListener('load', function() {
            document.getElementById("formulaire_image").reset();
        });
    </script>
</head>
<body>
    <form action="<?= $_SERVER["PHP_SELF"];?>" 
        method="post"
        enctype="multipart/form-data"
        id="formulaire_image"
        >
        <input type="file" 
            name="image[]" multiple>
        <input type="submit" 
            name="submit"
            value="upload">
    </form>

    <?php 

    $chemin = 'article_img/';
    $files = scandir($chemin);

    // foreach($files as $file){
    //     if($file !== '.' && $file !== '..') {
    //         echo '<img src="'. $chemin . $file . '" alt="" style="width: 100px; height:100px;">';
    //     }
    // }

    if(isset($_POST['submit'])){
        if(!empty($_FILES['image']['name'][0])) {
            foreach($_FILES['image']['tmp_name'] as $cle => $tmp_name){
                $nom = $_FILES['image']['name'][$cle];
                $type = $_FILES['image']['type'][$cle];
                $taille = $_FILES['image']['size'][$cle];
                $erreur = $_FILES['image']['error'][$cle];

                $ext = pathinfo($nom, PATHINFO_EXTENSION);
                $taille_max =  100000; // 20971520 
                $type_accepte = ['png', 'jpg', 'jpeg'];

                echo "Nom du fichier: $nom<br>";
                echo "Type du fichier: $type<br>";
                echo "Taille du fichier: $taille<br>";
                echo "Extension du fichier: $ext<br>";

                if($taille <= $taille_max && in_array($ext, $type_accepte)){
                    if (is_uploaded_file($tmp_name)) {
                        move_uploaded_file($tmp_name, $chemin.$nom);
                        echo 'Image uploadée<br>';
                    } else {
                        echo 'Échec du téléchargement du fichier.<br><br>';
                        
                    }
                } else {
                    echo 'Taille maximale dépassée (max 20 Mo) ou le type de fichier est mauvais (png, jpg ou jpeg)<br><br>';
                }
            }
        } else {
            echo 'Aucun fichier n\'a été téléchargé.<br>';
        }

    }
    ?>
</body>
</html>
