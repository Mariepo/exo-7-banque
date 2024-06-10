<!-- formulaire ajout de compte avec une action sur le fichier CompteController.php?action=insert -->
<!-- formulaire en post -->


<form action="../Controllers/CompteController.php?action=insert" method="post">
    <label for="numero">Numéro du compte</label>
    <input type="number" name="numero" id="numero" placeholder="Renseignez le numero du compte">
    <br>
    <label for="solde">Solde</label>
    <input type="number" name="solde" id="solde" placeholder="Renseignez le solde du compte">
    <br>
    <label for="fk_clients">Titulaire (fk)</label>
    <input type="number" name="fk_clients" id="fk_clients" placeholder="Entez la  fk du client">
    <br>
    <input type="submit" value="Envoyer">
</form>

