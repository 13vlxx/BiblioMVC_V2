<div class="form">
    <h1>Page de modification</h1>
    <h2 id="ajl">Modifier les infos d'un livre</h2>
    <?php foreach ($livre as $l): ?>
        <form action="?controller=livre&action=traitement_edit_livre&id=<?= $l->Id ?>" method="post">
            <label for="isbn">ISBN</label>
            <input id="isbn" type="text" name="isbn" value="<?= $l->ISBN ?>" /> <br />
            <label for="titre">Titre</label>
            <input id="titree" type="text" name="titre" value="<?= $l->Titre ?>" /> <br />
            <label for="theme">Thème</label>
            <input id="theme" type="text" name="theme" value="<?= $l->Theme ?>" /> <br />
            <label for="nbpages">Nb pages</label>
            <input id="nbpages" type="text" name="nbpages" value="<?= $l->Nb_pages ?>" />
            <br />
            <label for="format">Format</label>
            <input id="format" type="text" name="format" value="<?= $l->Format ?>" /> <br />
            <label for="nom">Nom auteur</label>
            <input id="nom" type="text" name="nom" value="<?= $l->Nom_auteur ?>" /> <br />
            <label for="prenom">Prénom auteur</label>
            <input id="prenom" type="text" name="prenom" value="<?= $l->Prenom_auteur ?>" /> <br />
            <label for="editeur">Éditeur</label>
            <input id="editeur" type="text" name="editeur" value="<?= $l->Editeur ?>" /> <br />
            <label for="annee">Année édition</label>
            <input id="annee" type="text" name="annee" value="<?= $l->Annee_edition ?>" /> <br />
            <label for="prix">Prix</label>
            <input id="prix" type="text" name="prix" value="<?= $l->Prix ?>" /> <br />
            <label for="langue">Langue</label>
            <input id="langue" type="text" name="langue" value="<?= $l->Langue ?>" /> <br />
            <div class="submit">
                <input type="submit" name="submit" value="Ajouter" />
            </div>
        </form>
    <?php endforeach; ?>
</div>