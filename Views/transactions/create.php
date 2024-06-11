<!-- Ici je veux un formulaire avec une liste selective pour le compte beneficiaire 
Un champ montatn
Et un liste selective pour le compte beneficiaire, ces deux listes devront reprendre les comptes 
existant en bdd comme pour client dans la création d'un compte -->
<form action="../Controllers/TransactionController.php?action=insert" method="POST">
    <label for="debiteur">Compte débiteur : </label>  
    <select name="debiteur" id="debiteur">
        <?php
            foreach($comptes as $compte){
                echo "<option value='" . $compte['id_comptes'] . "'> " . $compte['numero_compte'] . "</option>";
            }
        ?>
    </select>
    <br><br>
    <label for="montant">Montant :</label>
    <input type="number" name="montant" id="montant">
    <br><br>
    <label for="beneficiaire">Compte bénéficiaire : </label>  
    <select name="beneficiaire" id="beneficiaire">
    <?php
            foreach($comptes as $compte){
                echo "<option value='" . $compte['id_comptes'] . "'> " . $compte['numero_compte'] . "</option>";
            }
        ?>
    </select>
    <br><br>
    <input type="submit" value="Valider le virement">
</form>