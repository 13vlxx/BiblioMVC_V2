<div class="form">
    <h1>Page d'ajout d'un livre</h1>
    <h2 id="ajl">Ajouter un livre</h2>
    <form action="?controller=livre&action=traitement_insert_livre" method="post">
        <label for="isbn">ISBN</label>
        <input required id="isbn" type="text" name="isbn" /> <br />
        <label for="titree">Titre</label>
        <input required id="titree" type="text" name="titre" /> <br />
        <label for="theme">Thème</label>
        <input required id="theme" type="text" name="theme" /> <br />
        <label for="nbpages">Nb pages</label>
        <input required id="nbpages" type="text" name="nbpages" />
        <br />
        <label for="format">Format</label>
        <input required id="format" type="text" name="format" /> <br />
        <label for="nom">Nom auteur</label>
        <input required id="nom" type="text" name="nom" /> <br />
        <label for="prenom">Prénom auteur</label>
        <input required id="prenom" type="text" name="prenom" /> <br />
        <label for="editeur">Éditeur</label>
        <input required id="editeur" type="text" name="editeur" /> <br />
        <label for="annee">Année édition</label>
        <input required id="annee" type="text" name="annee" /> <br />
        <label for="prix">Prix</label>
        <input required id="prix" type="text" name="prix" /> <br />
        <label for="langue">Langue</label>
        <input required id="langue" type="text" name="langue" /> <br />
        <div class="submit">
            <input type="submit" name="submit" value="Ajouter" />
        </div>
    </form>
</div>