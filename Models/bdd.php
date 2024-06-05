<?php

class BDD {
    function connect(){
        try {
            // 127.0.0.1:3306 127.0.0.1:8809
            $pdo = new PDO('mysql:host=localhost;dbname=cours_bdd', 'root', '');
            echo 'Connexion réussie';  
            return $pdo;
        } catch (PDOException $e) {
            echo 'Une erreure est survenue' . $e->getMessage();
        }
    }
};

