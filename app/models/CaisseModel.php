<?php 

namespace app\models;
use Flight;

class CaisseModel {
    private $db;

    public function __construct($db) {
        $this->db = $db;
    }

    public function getAllCaisses() {
        $query = "SELECT * FROM caisse";
        $stmt = $this->db->query($query);
        return $stmt->fetchAll(\PDO::FETCH_ASSOC);
    }

    public function getCaisseById($idCaisse) {
        $query = "SELECT * FROM caisse WHERE idCaisse = :idCaisse";
        $stmt = $this->db->prepare($query);
        $stmt->execute([':idCaisse' => $idCaisse]);
        $caisse = $stmt->fetch();
        return $caisse;
    }

}

