<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sidebar Spotify</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">
    <link rel="stylesheet" href="style/sidebar.css">
</head>
<body>
<?php require_once ('php/header.php')?>
<!-- Bouton pour ouvrir la sidebar (Icône de bibliothèque) -->
<div class="sidebar-trigger  bg-dark">
    <a href="#" class="nav-link" data-bs-toggle="offcanvas" data-bs-target="#leftSidebar">
    <i class="bi bi-collection-fill" title="bibliothèque"></i>
    </a>
</div>

<!-- Sidebar gauche -->
<div class="offcanvas offcanvas-start bg-dark" tabindex="-1" id="leftSidebar">
    <div class="offcanvas-header">
        <h5 class="offcanvas-title  text-white"">Ma Bibliothèque</h5>
        <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
    </div>
    <div class="offcanvas-body  text-white"">
        <!-- Contenu dynamique à ajouter ici -->
        <div id="content-container">
            <!-- Les images et titres -->
            <?php for ($i = 1; $i <= 20; $i++) { ?>
                <div class="image-item">
                    <img src="public/greenzer.jpg" alt="Image <?php echo $i; ?>" class="img-fluid">
                    <h6>Titre de l'image <?php echo $i; ?></h6>
                </div>
            <?php } ?>
        </div>
    </div>
</div>

<?php require_once ('bottom.php')?>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>


