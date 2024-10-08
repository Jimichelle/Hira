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

    $stmt = $pdo->query("SELECT id, nom, email FROM newsletter ORDER BY id DESC");
    $newsletters = $stmt->fetchAll(PDO::FETCH_ASSOC);
} catch (PDOException $e) {
    die("Erreur : " . $e->getMessage());
}
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gestion de la Newsletter</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>
    <div class="container mt-5">
        <h1>Gestion de la Newsletter</h1>

        <form action="sendNewsletter.php" method="post" class="mb-3">
            <input type="hidden" name="send_to_all" value="true">
            <button type="submit" class="btn btn-success">Envoyer la Newsletter à Tous les Abonnés</button>
        </form>
        
        <h2 class="mt-4">Liste des Abonnés</h2>
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Nom</th>
                    <th>Email</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($newsletters as $newsletter): ?>
                    <tr>
                        <td><?php echo htmlspecialchars($newsletter['id']); ?></td>
                        <td><?php echo htmlspecialchars($newsletter['nom']); ?></td>
                        <td><?php echo htmlspecialchars($newsletter['email']); ?></td>
                        <td>
                            <form action="send_newsletter.php" method="post" style="display: inline;">
                                <input type="hidden" name="email" value="<?php echo htmlspecialchars($newsletter['email']); ?>">
                                <button type="submit" class="btn btn-primary">Envoyer</button>
                            </form>
                        </td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
</body>
</html>
