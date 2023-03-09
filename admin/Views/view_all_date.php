<div class="main">
    <main>
        <form action="?controller=commande&action=list_date" method="post">
            <select name="date" id="select">
                <option value="#" disabled selected>Saissisez la date</option>

                <?php foreach ($date as $s): ?>
                    <option value="<?= $s->date_achat ?>"><?= $s->date_achat ?></option>
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
            <?php foreach ($list_date as $l): ?>
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