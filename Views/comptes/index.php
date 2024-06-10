<button onclick="redirectToCreateCompte()">Ajouter un compte</button>

<table>
    <thead>
        <th>ID du compte</th>
        <th>Numéro du compte</th>
        <th>Solde</th>
        <th>Titulaire</th>
        <th>Actions</th>
    </thead>
    <tbody>
        <?php
            foreach ($comptes as $compte) {
                echo "<tr>";
                    echo "<td>".$compte["id_comptes"]."</td>";
                    echo "<td>".$compte["numero_compte"]."</td>";
                    echo "<td>".$compte["solde"]."€ </td>";
                    echo "<td>".$compte["titulaire"]."</td>";
                    echo "<td> <button onclick='redirectToDetailsCompte(" . $compte['id_comptes'] .")'> Voir compte </button> </td>";
                echo "</tr>";
            };
        ?>
    </tbody>
</table>

<script type="text/javascript">
    function redirectToCreateCompte(){
        window.location.replace("../Controllers/CompteController.php?action=create");
    };

    function redirectToDetailsCompte(id_comptes){
        window.location.replace("../Controllers/CompteController.php?action=details&id_comptes="+id_comptes)
    }
</script>
