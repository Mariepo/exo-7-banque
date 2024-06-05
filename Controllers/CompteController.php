<?php

require_once '../Models/Compte.php';

// Faire appelle à la fonction FetchComptes
$comptes = fetchCompte();

// Inclure la vue dans ../Views/comptes/index.php
include '../Views/comptes/index.php';