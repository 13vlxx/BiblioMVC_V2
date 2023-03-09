<div class="main">
    <main>
        <form action="?controller=livre&action=all_editeurs_list" method="post">
            <select name="editeur" id="select">
                <option value="#" disabled selected>Saissisez l'editeur</option>

                <?php foreach ($editeurs as $t): ?>
                    <option value="<?= $t->Editeur ?>"><?= $t->Editeur ?></option>
                <?php endforeach ?>
            </select>
            <input type="submit" name="envoyer" id="envoyer">
        </form>
    </main>
</div>