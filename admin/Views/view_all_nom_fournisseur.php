<!-- <div class="main">
    <main>
        <form action="?controller=fournisseur&action=all_raison_sociale_list" method="post">
            <select name="raison_sociale" id="select">
                <option value="#" disabled selected>Saissisez le fournisseur</option>

                <?php foreach ($nom_fournisseur as $s): ?>
                    <option value="<?= $s->Id_fournisseur ?>"><?= $s->raison_sociale ?></option>
                <?php endforeach ?>
            </select>
            <input type="submit" name="envoyer" id="envoyer">
        </form>
    </main>
</div> -->