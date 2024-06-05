
    <!-- // include './Controllers/ClientController.php'; -->

    <button onclick="redirectToClients()">Clients</button>
    <button onclick="redirectToComptes()">Comptes</button>

    <script type="text/javascript">
        function redirectToClients(){
            window.location.replace('./Controllers/ClientController.php');
        }
        function redirectToComptes(){
            window.location.replace('./Controllers/CompteController.php');
        }
    </script>