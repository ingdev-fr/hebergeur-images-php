<!DOCTYPE html>
<html>
   <head>
      <meta charset="utf-8" />
      <title><?= $title ?></title> 
      <link
        href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" 
        rel="stylesheet">
      <link href="style.css" rel="stylesheet" /> 
   </head>

   <body >
        <?php include_once('includes/header.php') ?>
        <div class="p-5">
            <p class="mt-5">Voici votre fichier téléchargé : </p>
            <?php 
            $filename = $_GET['filename']; ?>
            <a href="http://localhost:8080/<?php echo $filename ?>">
                <img class="w-25 h-auto" alt=" " src=<?php echo $filename ?>>
            </a>
            <?php
            if(isset($_GET['message'])) : ?>
                <div class="success alert-success p-3 mt-5" role="alert">
                <?php echo $_GET['message']; ?>
                </div>
            <?php endif; ?>
        </div>
        <?php include_once('includes/footer.php') ?>
    </body>
</html>