<button onclick="redirectToCreateClient()">Ajouter un client</button>

<table>
    <thead>
        <th>ID</th>
        <th>Nom</th>
        <th>Prenom</th>
        <th>Mail</th>
        <th>Telephone</th>
    </thead>
    <tbody>
        <?php
            foreach($clients as $client){
                echo "<tr>";
                    echo "<td>".$client["id_clients"]."</td>";
                    echo "<td>".$client["nom"]."</td>";
                    echo "<td>".$client["prenom"]."</td>";
                    echo "<td>".$client["mail"]."</td>";
                    echo "<td>".$client["telephone"]."</td>";
                echo "</tr>";
            }
        ?>
    </tbody>
</table>

<script type="text/javascript">
    function redirectToCreateClient(){
        window.location.replace("../Controllers/ClientController.php?action=create");
    };
</script>