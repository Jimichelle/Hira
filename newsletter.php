<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Newsletter</title>
    <link rel="stylesheet" href="style/newsletter.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    
</head>

<body>
<?php require_once ('php/header.php')?>


<div class="au_milieu">
    <div class="newsletter-container">
            <img src="public/logo.svg" alt="Hira Logo">
        <h2>Hira Newsletter</h2>
        <p>Votre plateforme de streaming pour artiste indépendant préféré.</p>
        <p><small>Pour être informer rapidement!</small></p>

        <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $email = $_POST['email'];
            $nom = $_POST['name'];

            // Validation basique de l'email
            
            if (filter_var($email, FILTER_VALIDATE_EMAIL)) {


                // Ici tu peux ajouter du code pour enregistrer l'email dans une base de données
                echo "<div class='alert alert-success'>Merci de vous être abonné ! <strong>$email</strong> on vous dit à bientôt !</div>";
            } else {
                echo "<div class='alert alert-danger'>Mail invalide veuillez réessayer.</div>";
            }
        }
        ?>

    
    <form action="result.php" method="post">
             <div class="row g-2">
                <div class="col-md-5">
                    <input type="text" name="nom" class="form-control" placeholder="Entre ton prénom..." required>
                </div>
        
                    <div class="col-md-5">
                        <input type="email" name="email" class="form-control" placeholder="Entre ton mail..." required>
                    </div>
                    <div class="col-md-2">
                        <button class="btn btn-subscribe w-100" type="submit">Valider</button>
                    </div>
                </div>
            </form>

        <a href="#" class="no-thanks">Non Merci</a>
    </div>
</div>
<?php require_once ('php/footer.php')?>
</body>
</html>
