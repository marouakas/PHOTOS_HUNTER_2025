<?php
// CONNEXION

try {
    $connexion = new PDO(
        "mysql:host=localhost;port=3306;dbname=photo_hunter;charset=utf8",
        "root",
        "root" // ← mot de passe probablement "root" sur MAMP
    );
    $connexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    die("Erreur de connexion à la base de données : " . $e->getMessage());
}
