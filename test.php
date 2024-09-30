<?php
// Connexion à la base de données
$host = 'localhost';
$dbname = 'hira_bdd';
$username = 'root';
$password = 'root';

try {
    $conn = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    echo "Erreur de connexion : " . $e->getMessage();
}

// Récupérer les titres
$sql = "SELECT * FROM titres LIMIT 12";
$stmt = $conn->prepare($sql);
$stmt->execute();
$titres = $stmt->fetchAll();
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <title>Application de musique</title>
</head>
<body>
<div class="container">
    <h1 class="text-center my-4">Bienvenue, Utilisateur</h1>

    <div class="row">
        <h3>Pour vous</h3>
        <?php foreach ($titres as $titre): ?>
            <div class="col-md-3 mb-4">
                <div class="card">
                    <img src="<?= $titre['cover_image'] ?>" class="card-img-top" alt="<?= $titre['nom_titre'] ?>">
                    <div class="card-body">
                        <h5 class="card-title"><?= $titre['nom_titre'] ?></h5>
                        <p class="card-text"><?= $titre['artiste'] ?></p>
                        <a href="lecture.php?id=<?= $titre['id'] ?>" class="btn btn-primary">Écouter</a>
                    </div>
                </div>
            </div>
        <?php endforeach; ?>
    </div>

    <div class="row">
        <h3>Récemment écouté</h3>
        <!-- Ajouter une logique pour les titres récemment écoutés -->
    </div>

    <div class="row">
        <h3>Classement</h3>
        <!-- Ajouter une logique pour les titres du classement -->
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
