<?php

use app\controllers\EssaiController;

use flight\Engine;
use flight\net\Router;

/** 
 * @var Router $router 
 * @var Engine $app
 */

// Contrôleur User
$Controller = new EssaiController();

///ACCUEIL ET CONNEXION
$router->get('/', function() {
    Flight::render("accueil");
});

?>