<?php
namespace App\Controllers\PhotosController;

use \PDO;

function indexAction (PDO $connexion) 
{
  // Je vais demander des données aux modèles
include_once '../app/models/photosModel.php';
$photos = \App\Models\PhotosModel\findAll($connexion, 6);


//   Je charge la vue 'home' dans $content


global $content, $title;
$title = "Catalogue";
ob_start();
include '../app/views/photos/index.php';
$content = ob_get_clean();


}

?>