<!-- faire la fonction qui vient chercher toutes les transactions
  -->
<?php
require_once('bdd.php');

// fonction
function fetchTransactions(){
  $bdd = new BDD();
  $conn = $bdd->connect();
  $request = $conn->prepare('SELECT id_transactions, montant, debiteur, beneficiaire, date FROM Transactions;');
  $request->execute();
  return $request->fetchAll(PDO::FETCH_ASSOC);
};

function insertTransaction($montant, $debiteur, $beneficiaire){
  $bdd = new BDD();
  $conn = $bdd->connect();
  $request = $conn->prepare('INSERT INTO Transactions (montant, debiteur, beneficiaire) VALUES (?,?,?)');
  $request->execute([$montant, $debiteur, $beneficiaire]);
}


