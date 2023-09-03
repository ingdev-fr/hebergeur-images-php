<?php

include_once('form.php');

// Testons si le fichier a bien été envoyé et s'il n'y a pas d'erreur
if(isset($_FILES['photo']) && $_FILES['photo']['error'] == 0) {
        if($_FILES['photo']['size'] <= 2000000){
            // Testons si l'extension est autorisée
            $fileInfo = pathinfo($_FILES['photo']['name']);
            $extension = $fileInfo['extension'];
            $allowedExtensions = array('jpg', 'jpeg', 'gif', 'png', 'svg');
            if(in_array($extension, $allowedExtensions)) {
                // Je crée la variable filename qui sera le nouveau nom du fichier reçu (on garde l'extemsion)
                $filename = 'uploads/' . date('dmYhis-') . basename($_FILES['photo']['name']);
                // On peut valider le fichier et le stocker définitivement
                move_uploaded_file($_FILES['photo']['tmp_name'], $filename);
                header('location: myfile.php?message=Merci pour l\'ajout !&filename='. $filename );
                exit();
            }
            else {
                header("location: form.php?message=Le format de fichier envoyé n'est pas autorisé ! ");
            exit();
            }
        }
        else {
            header("location: form.php?message=La taille de votre fichier est trop importante ! Max 2mo !");
            exit();
        }
    }
else {
    header('location: form.php');
    exit();
}

