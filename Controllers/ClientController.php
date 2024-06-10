<?php
require_once '../Models/Client.php';
require_once '../Models/Compte.php';

if(!isset($_GET['action'])){
    $clients = fetchClients();
    include '../Views/clients/index.php';
} else {
    if($_GET['action'] == "create"){
        include '../Views/clients/create.php';
    } 
    if($_GET['action'] == "insert"){
        $nom = $_POST['nom'];
        $prenom = $_POST['prenom'];
        $email = $_POST['email'];
        $telephone = $_POST['telephone'];
        insertClient($nom, $prenom, $email, $telephone);
        header('Location: ClientController.php');
    } 
    if($_GET['action'] == "details"){
        $id_clients = $_GET["id_clients"];
        $client = getClientById($id_clients);
        $comptes = getComptesByClient($id_clients);
        include "../Views/clients/details.php";
    }
}


