<?php

namespace app\controllers;
use Flight;

class CaisseController{

    public function redirectLogin() {
        $allCaisses = Flight::CaisseModel()->getAllCaisses();
        $data = ['caisses' => $allCaisses];
        Flight::render('login',$data);
    }

    public function login() {
        $idCaisse = Flight::request()->data->idCaisse;
        $caisse = Flight::CaisseModel()->getCaisseById($idCaisse);
        $data = ['caisse' => $caisse];
        Flight::render('template', $data);
    }

}