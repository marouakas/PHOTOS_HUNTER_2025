<?php

// ROUTER PRINCIPAL 

// ROUTE DES PHOTOS 
// PATTERN: /?photos
// CTRL: photosController
// ACTION: indexAction
if (isset($_GET['photos'])):
    include_once '../app/controllers/photosController.php';
    \App\Controllers\PhotosController\indexAction($connexion);
// ROUTE PAR DEFAUT
// PATTERN: /

// CTRL: pagesController
// ACTION: homeAction
else : 
include_once '../app/controllers/pagesController.php';
\App\Controllers\PagesController\homeAction($connexion);
endif;
?>