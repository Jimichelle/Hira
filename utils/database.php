<?php

/* Ici, nous définissons les informations de connexion */
$host = "172.23.0.3";
$dbname = "hira_bdd";
$username = "root";
$password = "root";



/* Création d'une instance PDO */
/* https://www.php.net/manual/fr/pdo.connections.php */
try {
    /* Connexion à la base de données */
    $pdo = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
    /* Si tout se passe bien, je n'affiche rien */
} catch (Exception $e) {
    /* Si la connexion échoue j'affiche un message d'erreur */
    echo $e->getMessage();
}
