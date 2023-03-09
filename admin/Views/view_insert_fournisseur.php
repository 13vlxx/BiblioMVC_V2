<div class="form">
    <h1>Page d'ajout d'un fournisseur</h1>
    <h2 id="ajl">Ajouter un Fournisseur</h2>
    <form action="?controller=fournisseur&action=traitement_insert_fournisseur" method="post">
        <label for="code">Code</label>
        <input required id="rsociale" type="text" name="code" /> <br />
        <label for="rsociale">Raison sociale</label>
        <input required id="rsociale" type="text" name="rsociale" /> <br />
        <label for="rue">Rue fournisseur</label>
        <input required id="rue" type="text" name="rue" />
        <br />
        <label for="cp">Code postal</label>
        <input required id="cp" type="text" name="cp" /> <br />
        <label for="localite">Localité</label>
        <input required id="localite" type="text" name="localite" /> <br />
        <label for="pays">Pays</label>
        <input required id="pays" type="text" name="pays" /> <br />
        <label for="tel">Tel</label>
        <input required id="tel" type="text" name="tel" /> <br />
        <label for="url">URL</label>
        <input required id="url" type="text" name="url" /> <br />
        <label for="email">E-mail</label>
        <input required id="email" type="text" name="email" /> <br />
        <label for="fax">Fax</label>
        <input required id="fax" type="text" name="fax" /> <br />
        <div class="submit">
            <input type="submit" name="submit" value="Ajouter" />
        </div>
    </form>
</div>