<?php
require_once '../Models/Compte.php';
require_once '../Models/Client.php';

if(!isset($_GET['action'])){
    $comptes = fetchComptes();
    include '../Views/comptes/index.php';
} else {
    if($_GET['action'] == "create"){
        $clients = fetchClients();
        include '../Views/comptes/create.php';
    } 
    if($_GET['action'] == "insert"){
        $numero = $_POST['numero'];
        $solde = $_POST['solde'];
        $fk_clients = $_POST['fk_clients'];
        insertCompte($numero, $solde, $fk_clients);
        header('Location: CompteController.php');
    } 
    if($_GET['action'] == "details"){
        $id_comptes = $_GET["id_comptes"];
        $compte = getCompteById($id_comptes);
        include '../Views/comptes/details.php';
    }
}


