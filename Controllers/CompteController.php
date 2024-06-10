<?php

require_once '../Models/Compte.php';


if(!isset($_GET['action'])){
    $comptes = fetchCompte();
    include '../Views/comptes/index.php';
} else {
    if($_GET['action'] == "create"){
        include '../Views/comptes/create.php';
    } 
    if($_GET['action'] == "insert"){
        $numero = $_POST['numero'];
        $solde = $_POST['solde'];
        $fk_clients = $_POST['fk_clients'];
        insertCompte($numero, $solde, $fk_clients);
        header('Location: CompteController.php');
    } 
}
