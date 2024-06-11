<?php

require_once('bdd.php');

// Créer la fonction fetchComptes qui sera appellée dans CompteController.php
function fetchComptes(){
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

function getComptesByClient($id_clients){
    $bdd = new BDD();
    $conn = $bdd->connect();
    $request = $conn->prepare("SELECT id_comptes, numero_compte, solde FROM Comptes WHERE fk_clients= ? ");
    $request->execute([$id_clients]);
    return $request->fetchAll(PDO::FETCH_ASSOC);
}

function getCompteById($id_comptes){
    $bdd = new BDD();
    $conn = $bdd->connect();
    $request = $conn->prepare("SELECT Comptes.id_comptes, numero_compte, solde, nom, prenom, mail, telephone
                                FROM Comptes
                                JOIN Clients ON Clients.id_clients = fk_clients
                                WHERE Comptes.id_comptes = ?");
    $request->execute([$id_comptes]);
    return $request->fetch(PDO::FETCH_ASSOC);
}

function updateCompteMontantDebiteur($montant, $id_comptes){
    $bdd = new BDD();
    $conn = $bdd->connect();
    $request = $conn->prepare("UPDATE Comptes SET solde = solde - ? WHERE id_comptes = ?");
    $request->execute([$montant, $id_comptes]);
}

function updateCompteMontantBeneficiaire($montant, $id_comptes){
    $bdd = new BDD();
    $conn = $bdd->connect();
    $request = $conn->prepare("UPDATE Comptes SET solde = solde + ? WHERE id_comptes = ?");
    $request->execute([$montant, $id_comptes]);
}


