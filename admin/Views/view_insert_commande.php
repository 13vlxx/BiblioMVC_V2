<div class="form">
    <h1>Page d'ajout d'une commande</h1>
    <h2 id="ajl">Ajouter une commande</h2>
    <form style="text-align: center;" action="?controller=commande&action=traitement_insert_commande" method="post">
        <label for="livre">Id livre</label>
        <select id="livre" name="livre">
            <option value="#" disabled selected>Saissisez le nom du livre</option>
            <?php foreach ($livre as $l): ?>
                <option value="<?= $l->Id ?>"><?= $l->Titre ?></option>
            <?php endforeach ?>
        </select> <br />
        <label for="fournisseur">Id fournisseur</label>
        <select id="fournisseur" name="fournisseur">
            <option value="#" disabled selected>Saissisez le nom du fournisseur</option>
            <?php foreach ($fournisseur as $f): ?>
                <option value="<?= $f->Id_fournisseur ?>"><?= $f->raison_sociale ?></option>
            <?php endforeach ?>
        </select> <br />
        <label for="date">Date achat</label>
        <input required id="date" type="date" name="date" /> <br />
        <label for="prix">Prix achat</label>
        <input required id="prix" type="number" name="prix" /> <br />
        <label for="nbr">Nombre d'exemplaires</label>
        <input required id="nbr" type="number" name="nbr" /> <br />
        <div class="submit">
            <input type="submit" name="submit" value="Ajouter" />
        </div>
    </form>
</div>