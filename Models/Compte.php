<?php

require_once('bdd.php');

// Créer la fonction fetchComptes qui sera appellée dans CompteController.php
function fetchCompte(){
    $bdd = new BDD();
    $conn = $bdd->connect();
    $request = $conn->prepare('SELECT id_comptes, numero_compte, solde FROM Comptes;');
    $request->execute();
    return $request->fetchAll(PDO::FETCH_ASSOC);
};

