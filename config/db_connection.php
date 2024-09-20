<?php
$host = '127.0.0.1';
$db = 'Arcadia';
$user = 'admin_arcadia'; 
$pass = 'connectdash*'; 

try {
    $pdo = new PDO("mysql:host=$host;dbname=$db", $user, $pass);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    echo "Erreur de connexion : " . $e->getMessage();
}

echo "Connexion réussie à la base de données '$db'!";

?>
