<?php

require_once('bdd.php');

// Créer la fonction fetchComptes qui sera appellée dans CompteController.php
function fetchCompte(){
    $bdd = new BDD();
    $conn = $bdd->connect();
    $request = $conn->prepare('SELECT id_comptes, numero_compte, solde, fk_clients AS titulaire FROM Comptes;');
    $request->execute();
    return $request->fetchAll(PDO::FETCH_ASSOC);
};

function insertCompte($numero, $solde, $fk_clients){
    $bdd = new BDD();
    $conn = $bdd->connect();
    $request = $conn->prepare('INSERT INTO Comptes (numero_compte, solde, fk_clients) VALUES (?,?,?)');
    $request->execute([$numero, $solde, $fk_clients]);
}