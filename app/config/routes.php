<?php

use app\controllers\EssaiController;
use app\controllers\CaisseController;
use flight\Engine;
use flight\net\Router;

/** 
 * @var Router $router 
 * @var Engine $app
 */

// Contrôleur User
$Controller = new EssaiController();
$CaisseController = new CaisseController();

///ACCUEIL ET CONNEXION
// $router->get('/', function() {
//     Flight::render("accueil");
// });
$router->get('/', [ $CaisseController, 'redirectLogin' ]);
$router->get('/', [ $CaisseController, 'login' ]);

Flight::route('POST /', array('app\controllers\CaisseController', 'login'));

?>