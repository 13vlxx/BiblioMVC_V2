<div class="main">
    <main>
        <form action="?controller=fournisseur&action=all_raison_sociale_list" method="post">
            <select name="raison_sociale" id="select">
                <option value="#" disabled selected>Saissisez la raison sociale</option>

                <?php foreach ($raison_sociale as $s): ?>
                    <option value="<?= $s->raison_sociale ?>"><?= $s->raison_sociale ?></option>
                <?php endforeach ?>
            </select>
            <input type="submit" name="envoyer" id="envoyer">
        </form>
    </main>
</div>