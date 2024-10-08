<?php
session_start();
require 'vendor/autoload.php';

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

$host = '172.23.0.3';
$dbname = 'hira_bdd';
$username = 'root';
$password = 'root';

try {
    $pdo = new PDO("mysql:host=$host;dbname=$dbname;charset=utf8", $username, $password);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    $stmt = $pdo->query("SELECT email FROM newsletter");
    $emails = $stmt->fetchAll(PDO::FETCH_COLUMN);

    $mail = new PHPMailer(true);
    $mail->isMail();
    $mail->setFrom('no-reply@hira.ovh', 'Hira');
    $mail->isHTML(true);
    $mail->Subject = 'Votre Newsletter Hira';
    $mail->Body    = '<h1>Bonjour,</h1><p>Voici les dernières actualités de Hira.</p>';
    $mail->AltBody = 'Bonjour, Voici les dernières actualités de Hira.';

    foreach ($emails as $email) {
        $mail->clearAddresses();
        $mail->addAddress($email);

        try {
            $mail->send();
            echo "La newsletter a été envoyée à $email avec succès.<br>";
        } catch (Exception $e) {
            echo "Erreur lors de l'envoi de la newsletter à $email : {$mail->ErrorInfo}<br>";
        }
    }
} catch (Exception $e) {
    echo "Erreur lors de la connexion à la base de données : " . $e->getMessage();
}
?>
