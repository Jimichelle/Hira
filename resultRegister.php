<?php
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
        $username = $_POST['username'];
        $mail = $_POST['email'];  // Assurez-vous que le champ HTML est bien "email" dans le formulaire
        $password = password_hash($_POST['password'], PASSWORD_DEFAULT);

        // Vérifier si l'email existe déjà
        $checkEmail = $pdo->prepare("SELECT * FROM users WHERE mail = :mail");
        $checkEmail->bindParam(':mail', $mail);
        $checkEmail->execute();

        if ($checkEmail->rowCount() > 0) {
            echo "Cet email est déjà utilisé. Veuillez en choisir un autre.";
        } else {
            // Insertion dans la base de données
            $stmt = $pdo->prepare("INSERT INTO users (username, mail, password) VALUES (:username, :mail, :password)");
            $stmt->bindParam(':username', $username);
            $stmt->bindParam(':mail', $mail);
            $stmt->bindParam(':password', $password);
            
            if ($stmt->execute()) {
                echo "Inscription réussie!";
            } else {
                echo "Erreur lors de l'inscription.";
            }
        }
    }
} catch (PDOException $e) {
    die("Erreur : " . $e->getMessage());
}
?>
