<div class="main">
    <main>
        <form action="?controller=livre&action=all_titres_list" method="post">
            <select name="titre" id="select">
                <option value="#" disabled selected>Saissisez le titre</option>

                <?php foreach ($titres as $t): ?>
                    <option value="<?= $t->Titre ?>"><?= $t->Titre ?></option>
                <?php endforeach ?>
            </select>
            <input type="submit" name="envoyer" id="envoyer">
        </form>
    </main>
</div>