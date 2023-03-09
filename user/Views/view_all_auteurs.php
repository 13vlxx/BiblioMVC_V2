<div class="main">
    <main>
        <form action="?controller=livre&action=all_auteurs_list" method="post">
            <select name="titre" id="select">
                <option value="#" disabled selected>Saissisez l'auteur</option>

                <?php foreach ($auteurs as $t): ?>
                    <option value="<?= $t->Nom_auteur ?>"><?= $t->Nom_auteur ?></option>
                <?php endforeach ?>
            </select>
            <input type="submit" name="envoyer" id="envoyer">
        </form>
    </main>
</div>