<?php
// Afficher le tableau des comptes
// var_dump($clients);
?>
<!-- // Utiliser un foreach -->

<table>
    <thead>
        <th>ID du compte</th>
        <th>Numéro du compte</th>
        <th>Solde</th>
    </thead>
    <tbody>
        <?php
            foreach ($comptes as $compte) {
                echo "<tr>";
                    echo "<td>".$compte["id_comptes"]."</td>";
                    echo "<td>".$compte["numero_compte"]."</td>";
                    echo "<td>".$compte["solde"]."€ </td>";
                echo "</tr>";
            };
        ?>
    </tbody>
</table>