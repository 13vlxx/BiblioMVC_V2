<div class="form">
    <form id="form" action="?controller=sign_up&action=insert_user" method="post">
        <h3>Inscription</h3>
        <p>Entrez vos informations pour vous inscrire</p>
        <table>
            <tr>
                <td><label for="nom">Nom : </label></td>
                <td><input required type="text" id="inom" name="nom" /></td>
            </tr>
            <tr>
                <td><label for="prenom">Prénom : </label></td>
                <td><input required type="text" id="iprenom" name="prenom" /></td>
            </tr>
            <tr>
                <td><label for="email">Adresse e-mail : </label></td>
                <td><input required type="email" id="imail" name="email" /></td>
            </tr>
            <tr>
                <td><label for="password">Mot de Passe : </label></td>
                <td><input required type="password" id="ipassword" name="password" /></td>
            </tr>
            <tr style="text-align: center">
                <td><input required type="submit" id="submit" name="submit" value="S'inscrire" /></td>
                <td><a href="?controller=sign_up&action=home">Se connecter</a></td>
            </tr>
        </table>
    </form>
</div>
<script>
    const form = document.querySelector("#form");

    form.addEventListener("submit", function (e) {
        const nom = document.getElementById("inom");
        const prenom = document.getElementById("iprenom");
        const email = document.getElementById("imail");
        const password = document.getElementById("ipassword");

        if (nom.value.length < 2 || nom.value.length > 30) {
            alert("Le nom doit contenir entre 2 et 30 caractères.");
            e.preventDefault();
        }
        if (prenom.value.length < 2 || prenom.value.length > 30) {
            alert("Le prénom doit contenir entre 2 et 30 caractères.");
            e.preventDefault();
        }
        if (email.value.length < 8 || email.value.length > 30) {
            alert("Le mail doit contenir entre 8 et 30 caractères.");
            e.preventDefault();
        }
        if (password.value.length < 8 || password.value.length > 30) {
            alert("Le mot de passe doit contenir entre 8 et 30 caractères.");
            e.preventDefault();
        }
    });
</script>