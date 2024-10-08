<?php
session_start();

include 'php/header.php';
include 'utils/database.php';

$host = '172.23.0.3';
$dbname = 'hira_bdd';
$username = 'root';
$password = 'root';

try {
    $pdo = new PDO("mysql:host=$host;dbname=$dbname;charset=utf8", $username, $password);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    // Récupérer le nombre de morceaux
    $stmt = $pdo->query("SELECT COUNT(*) AS total_morceaux FROM musique");
    $totalMorceaux = $stmt->fetch(PDO::FETCH_ASSOC)['total_morceaux'];

    // Récupérer la liste des utilisateurs
    $stmt = $pdo->query("SELECT Id_Users, username, mail FROM users ORDER BY Id_Users DESC");
    $utilisateurs = $stmt->fetchAll(PDO::FETCH_ASSOC);

    // Récupérer les abonnés à la newsletter
    $stmt = $pdo->query("SELECT id, nom, email FROM newsletter ORDER BY id DESC");
    $newsletters = $stmt->fetchAll(PDO::FETCH_ASSOC);

} catch (PDOException $e) {
    die("Erreur : " . $e->getMessage());
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>
    <div class="container mt-5">
        <h1>Tableau de Bord Administrateur</h1>

        <!-- Statistiques -->
        <div class="row my-4">
            <div class="col-md-4">
                <div class="card text-white bg-primary mb-3">
                    <div class="card-body">
                        <h5 class="card-title">Nombre de Morceaux</h5>
                        <p class="card-text"><?php echo $totalMorceaux; ?></p>
                    </div>
                </div>
            </div>
        </div>

        <!-- Liste des Utilisateurs -->
        <h2>Liste des Utilisateurs</h2>
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Nom d'utilisateur</th>
                    <th>Email</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($utilisateurs as $utilisateur): ?>
                    <tr>
                        <td><?php echo htmlspecialchars($utilisateur['Id_Users']); ?></td>
                        <td><?php echo htmlspecialchars($utilisateur['username']); ?></td>
                        <td><?php echo htmlspecialchars($utilisateur['mail']); ?></td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>

        <!-- Liste des Abonnés à la Newsletter -->
        <h2>Liste des Abonnés à la Newsletter</h2>
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Nom</th>
                    <th>Email</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($newsletters as $newsletter): ?>
                    <tr>
                        <td><?php echo htmlspecialchars($newsletter['id']); ?></td>
                        <td><?php echo htmlspecialchars($newsletter['nom']); ?></td>
                        <td><?php echo htmlspecialchars($newsletter['email']); ?></td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js" integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous"></script>
</body>
</html>
