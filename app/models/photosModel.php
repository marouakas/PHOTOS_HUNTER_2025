<?php
namespace App\Models\PhotosModel;

use \PDO;

function findAll(PDO $connexion): array {
    $sql = "SELECT *, p.id AS photoID, a.id AS authorID
            FROM photos p
            INNER JOIN authors a ON p.author_id = a.id
            ORDER BY p.created_at DESC
            LIMIT 3;";
    return $connexion->query($sql)->fetchAll(PDO::FETCH_ASSOC);       
}
