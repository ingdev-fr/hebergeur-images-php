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
        <!-- Header -->
        <?php include_once('includes/header.php') ?>

        <!-- Content -->
        <div class="container">
            <h1 class="mt-5">Envoyez vos fichers</h1>

            <!-- FORMULAIRE -->
            <form method="POST" action="index.php" enctype="multipart/form-data">
                <!-- Ajout champ d'upload ! -->
                <div class="mb-3">
                    <label for="screenshot" class="form-label">Sélectionnez et envoyez votre fichier</label>
                    <input type="file" class="form-control" id="photo" name="photo" required/>
                </div>
                <button type="submit" class="btn btn-primary">Envoyer</button>
            </form>

            <?php if(isset($_GET['message'])) : ?>
                <div class="alert alert-danger mt-5" role="alert">
                    <?php echo $_GET['message']; ?>
                </div>
            <?php endif; ?>
        </div>

        <!-- Footer -->
        <?php include_once('includes/footer.php') ?>
    </body >
</html>

