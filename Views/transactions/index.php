<button onclick="redirectToCreateTransaction()">Faire un virement</button>

<table>
    <thead>
        <th>ID</th>
        <th>Montant</th>
        <th>Compte débiteur</th>
        <th>Compte bénéficiaire</th>
        <th>Date
        </th>
    </thead>
    <tbody>
        <?php
            foreach($transactions as $transaction){
                echo "<tr>";
                    echo "<td>" . $transaction["id_transactions"] . "</td>";
                    echo "<td>" . $transaction["montant"] . "€</td>";
                    echo "<td>" . $transaction["debiteur"] . "</td>";
                    echo "<td>" . $transaction["beneficiaire"] . "</td>";
                    echo "<td>" . $transaction["date"] . "</td>";
                echo "</tr>";
            }
        ?>
    </tbody>
</table>

<script type="text/javascript">
    function redirectToCreateTransaction(){
        window.location.replace("../Controllers/TransactionController.php?action=create");
    }
</script>