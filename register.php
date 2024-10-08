<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Connexion</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-icons/1.8.1/font/bootstrap-icons.min.css">
    <link rel="stylesheet" href="style/register.css">
</head>
<body>

<?php session_start(); ?>
<?php require_once('php/header.php')
?>
<main>
<div class="container d-flex justify-content-center align-items-center vh-100">
        <!-- Aligned to the left -->
        <div class="card p-4 shadow-lg" style="max-width: 400px; width: 100%;">
            <h1 class="mb-4 fw-bold">Inscris-toi</h1>
            
            <form action="resultRegister.php" method="post">
                <div class="mb-3">
                    <label for="text" class="form-label">Pseudo</label>
                    <input type="text" class="form-control" id="username" name="username" placeholder="Nom d'utilisateur" required>
                </div>
                <div class="mb-3">
                    <label for="text" class="form-label">Mail</label>
                    <input type="email" class="form-control" id="email" name="email" placeholder="Adresse Email" required>
                </div>
                <div class="mb-3 position-relative">
                    <label for="password" class="form-label">Mot de passe</label>
                    <input type="password" class="form-control" id="password" name="password" placeholder="Mot de passe" required>
                    
                </div>
                <div class="d-grid">
                    <button type="submit" class="btn btn-primary">S'inscrire</button>
                </div>
            </form>
            <div class="text-center my-3">
                <span>ou</span>
            </div>
            <div class="d-flex justify-content-evenly mb-3">
                <a href="#" class="btn btn-outline-secondary"><i class="bi bi-instagram"></i></a>
                <a href="#" class="btn btn-outline-secondary"><i class="bi bi-google"></i></a>
                <a href="#" class="btn btn-outline-secondary"><i class="bi bi-apple"></i></a>
            </div>
            <p class="text-center">
                Tu as déjà un compte ? <a href="login.php" class="text-primary">Connexion</a>
            </p>
            <p class="text-center small text-muted">
                Ce site est protégé par reCAPTCHA. Les <a href="#">Règles de confidentialité</a> et <a href="#">Conditions d'utilisation</a> s'appliquent.
            </p>
</div>
</main>
<?php require_once('php/footer.php') ?>
</body>
</html>