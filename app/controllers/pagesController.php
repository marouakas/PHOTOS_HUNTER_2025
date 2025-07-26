<?php
namespace App\Controllers\PagesController;

use \PDO;

function homeAction (PDO $connexion) 
{
  // Je vais demander des données aux modèles
include_once '../app/models/photosModel.php';
$photos = \App\Models\PhotosModel\findAll($connexion);

include_once '../app/models/authorsModel.php';
$authors = \App\Models\AuthorsModel\findAll($connexion);

//   Je charge la vue 'home' dans $content


global $content, $title;
$title = "HomePage";
ob_start();
include '../app/views/pages/home.php';
$content = ob_get_clean();


}

?>