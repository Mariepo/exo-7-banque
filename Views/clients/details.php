<h5>Nom : <?php echo $client["nom"]?></h5>
<h5>Prenom : <?php echo $client["prenom"]?></h5>
<h5>Mail : <?php echo $client["mail"]?></h5>
<h5>Telephone : <?php echo $client["telephone"]?></h5>
<br>

<h4>Comptes</h4>
<table>
    <thead>
        <th>Numéro de compte</th>
        <th>Solde</th>
    </thead>
    <tbody>
        <?php
            foreach($comptes as $compte){
                echo "<tr>";
                    echo "<td>" . $compte["id_comptes"] . "</td>";
                    echo "<td>" . $compte["numero_compte"] . "</td>";
                    echo "<td>" . $compte["solde"] . "</td>";
                echo "</tr>";
            }
        ?>
    </tbody>
</table>