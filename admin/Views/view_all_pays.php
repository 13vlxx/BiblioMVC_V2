<div class="main">
    <main>
        <form action="?controller=fournisseur&action=all_pays_list" method="post">
            <select name="pays" id="select">
                <option value="#" disabled selected>Saissisez le pays</option>

                <?php foreach ($pays as $p): ?>
                    <option value="<?= $p->pays ?>"><?= $p->pays ?></option>
                <?php endforeach ?>
            </select>
            <input type="submit" name="envoyer" id="envoyer">
        </form>
    </main>
</div>