<div class="main">
    <main>
        <form action="?controller=fournisseur&action=all_localite_list" method="post">
            <select name="localite" id="select">
                <option value="#" disabled selected>Saissisez la localité</option>
                <?php foreach ($localite as $l): ?>
                    <option value="<?= $l->localite ?>"><?= $l->localite ?></option>
                <?php endforeach ?>
            </select>
            <input type="submit" name="envoyer" id="envoyer">
        </form>
    </main>
</div>