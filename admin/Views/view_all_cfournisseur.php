<div class="main">
    <main>
        <form action="?controller=commande&action=list_cfournisseur" method="post">
            <select name="cfournisseur" id="select">
                <option value="#" disabled selected>Saissisez le titre</option>

                <?php foreach ($nom_fournisseur as $s): ?>
                    <option value="<?= $s->Id_fournisseur ?>"><?= $s->raison_sociale ?></option>
                <?php endforeach ?>
            </select>
            <input type="submit" name="submit" id="envoyer">
        </form>
    </main>
</div>


<?php if ($position !== 1): ?>
    Résultat de votre recherche :
    <br />
    <table class='table table-bordered table-responsive-md bg_table'>
        <thead>
            <tr>
                <th>ISBN</th>
                <th>Titre</th>
                <th>Thème</th>
                <th>Nombre de page</th>
                <th>Format</th>
                <th>Auteur</th>
                <th>Editeur</th>
                <th>Année d'édition</th>
                <th>Prix</th>
                <th>Langue</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($list_cfournisseur as $l): ?>
                <tr>
                    <td>
                        <?= $l->ISBN ?>
                    </td>
                    <td>
                        <?= $l->Titre ?>
                    </td>
                    <td>
                        <?= $l->Theme ?>
                    </td>
                    <td>
                        <?= $l->Nb_pages ?>
                    </td>
                    <td>
                        <?= $l->Format ?>
                    </td>
                    <td>
                        <?= $l->Nom_auteur ?>
                        <?= $l->Prenom_auteur ?>
                    </td>
                    <td>
                        <?= $l->Editeur ?>
                    </td>
                    <td>
                        <?= $l->Annee_edition ?>
                    </td>
                    <td>
                        <?= $l->Prix ?>
                    </td>
                    <td>
                        <?= $l->Langue ?>
                    </td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
<?php endif; ?>