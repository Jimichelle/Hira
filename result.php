<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Mon Blog - Inscription</title>
    <link rel="stylesheet" href="style/result.css">
    <link rel="icon" type="image/x-icon" href="./img/favicon.ico">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body>
<?php require_once('php/header.php') ?>
    <main>
        <?php
        try {
            require_once("utils/database.php");
            $nom = $_POST['nom'] ?? '';
            $email = $_POST['email'] ?? '';
            if (empty($email) || empty($nom)) {
                echo "Veuillez renseigner un nom et un email.";
                return;
            }
            if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
                echo "L'email renseigné est invalide.";
                return;
            }
            $request = $pdo->prepare('INSERT INTO utilisateur (nom, email) VALUES (:nom, :email)');
            $request->bindParam(':nom', $nom);
            $request->bindParam(':email', $email);
            $request->execute();
            if ($request->rowCount() === 1) {
                header('Location: newsletter_sucess.php');
            } else {
                echo "<div class='alert alert-danger'>Erreur lors de l'ajout de l'utilisateur.</div>";
            }
        } catch (Exception $error) {
            echo "<div class='alert alert-danger'>Une erreur est survenue : " . $error->getMessage() . "</div>";
        }
        $pdo = null;
        ?>
    </main>
    <?php require_once('php/footer.php') ?>
</body>
</html>
