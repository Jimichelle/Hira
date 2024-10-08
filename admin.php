<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tableau de Bord Admin</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
    <div class="container mt-5">
        <h1 class="mb-4">Tableau de Bord Admin</h1>

        <div class="row">
            <!-- Nombre d'utilisateurs -->
            <div class="col-md-4">
                <div class="card text-white bg-primary mb-3">
                    <div class="card-body">
                        <h5 class="card-title">Nombre d'utilisateurs</h5>
                        <p class="card-text">
                            <?php
                            // Connexion à la base de données
                            include('db_connect.php');
                            $result = $conn->query("SELECT COUNT(*) AS count FROM users");
                            $userCount = $result->fetch_assoc();
                            echo $userCount['count'];
                            ?>
                        </p>
                    </div>
                </div>
            </div>

            <!-- Nombre de morceaux -->
            <div class="col-md-4">
                <div class="card text-white bg-success mb-3">
                    <div class="card-body">
                        <h5 class="card-title">Nombre de morceaux</h5>
                        <p class="card-text">
                            <?php
                            $result = $conn->query("SELECT COUNT(*) AS count FROM tracks");
                            $trackCount = $result->fetch_assoc();
                            echo $trackCount['count'];
                            ?>
                        </p>
                    </div>
                </div>
            </div>

            <!-- Historique de passage des pages -->
            <div class="col-md-12">
                <div class="card mb-3">
                    <div class="card-body">
                        <h5 class="card-title">Historique de navigation</h5>
                        <table class="table table-striped">
                            <thead>
                                <tr>
                                    <th>Utilisateur</th>
                                    <th>Page</th>
                                    <th>Date de passage</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                $result = $conn->query("SELECT u.username, h.page, h.visit_time 
                                                        FROM history h 
                                                        JOIN users u ON h.user_id = u.id 
                                                        ORDER BY h.visit_time DESC");
                                while ($row = $result->fetch_assoc()) {
                                    echo "<tr>";
                                    echo "<td>" . htmlspecialchars($row['username']) . "</td>";
                                    echo "<td>" . htmlspecialchars($row['page']) . "</td>";
                                    echo "<td>" . htmlspecialchars($row['visit_time']) . "</td>";
                                    echo "</tr>";
                                }
                                ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.0.6/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
