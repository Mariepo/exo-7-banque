<form action="../Controllers/ClientController.php?action=insert" method="post">
    <label for="nom">Nom</label>
    <input type="text" name="nom" id="nom" placeholder="Renseignez le nom du client">
    <br>
    <label for="prenom">Prénom</label>
    <input type="text" name="prenom" id="prenom" placeholder="Renseignez le prénom du client">
    <br>
    <label for="email">Email</label>
    <input type="email" name="email" id="email" placeholder="Renseignez l'email du client">
    <br>
    <label for="telephone">Téléphone</label>
    <input type="telephone" name="telephone" id="telephone" placeholder="Renseignez le téléphone du client">
    <br>
    <input type="submit" value="Envoyer">
</form>

