<?php
session_start(); // Démarrage de la session

// Connexion à la base de données
$host = '172.23.0.3';
$dbname = 'hira_bdd';
$username = 'root';
$password = 'root';

try {
    $pdo = new PDO("mysql:host=$host;dbname=$dbname;charset=utf8", $username, $password);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Récupérer les données du formulaire
        $mail = $_POST['email'];
        $password = $_POST['password'];

        // Vérifier si l'utilisateur existe et récupérer son mot de passe
        $stmt = $pdo->prepare("SELECT * FROM users WHERE mail = :mail");
        $stmt->bindParam(':mail', $mail);
        $stmt->execute();

        if ($stmt->rowCount() > 0) {
            // L'utilisateur existe, on vérifie le mot de passe
            $user = $stmt->fetch(PDO::FETCH_ASSOC);
            if (password_verify($password, $user['password'])) {
                // Mot de passe correct, on enregistre l'utilisateur dans la session
                $_SESSION['user_id'] = $user['Id_Users'];
                $_SESSION['username'] = $user['username'];
                
                echo "Connexion réussie ! Bienvenue, " . $_SESSION['username'] . ".";
                // Redirection vers la page d'accueil ou tableau de bord
                header("Location: index.php");
                exit();
            } else {
                // Mot de passe incorrect
                echo "Mot de passe incorrect. Veuillez réessayer.";
            }
        } else {
            // Utilisateur non trouvé
            echo "Aucun compte trouvé avec cet email.";
        }
    }
} catch (PDOException $e) {
    die("Erreur : " . $e->getMessage());
}
?>
