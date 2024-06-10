<?php
require_once 'bdd.php';

function fetchClients(){
    $bdd = new BDD();
    $conn = $bdd->connect();
    $request = $conn->prepare('SELECT id_clients, nom, prenom, mail, telephone FROM Clients;');
    $request->execute();
    return $request->fetchAll(PDO::FETCH_ASSOC);
};

function insertClient($nom, $prenom, $mail, $telephone){
    $bdd = new BDD();
    $conn = $bdd->connect();
    $request = $conn->prepare('INSERT INTO Clients (nom, prenom, mail, telephone) VALUES (?,?,?,?)');
    $request->execute([$nom, $prenom, $mail, $telephone]);
}