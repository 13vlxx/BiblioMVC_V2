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
            <span id="error"></span>
            </tr>
            <tr style="text-align: center">
                <td><input required type="submit" id="submit" name="submit" value="S'inscrire" /></td>
                <td><a href="?controller=sign_up&action=home">Se connecter</a></td>
            </tr>
        </table>
    </form>
</div>

<script>
    const form = document.querySelector("form");
    const errorSpan = document.querySelector("#error");
    errorSpan.style.color = "red";

    form.addEventListener("submit", function (e) {
        const fields = [
            { input: document.getElementById("inom"), min: 2, max: 30 },
            { input: document.getElementById("iprenom"), min: 2, max: 30 },
            { input: document.getElementById("imail"), min: 8, max: 30 },
            { input: document.getElementById("ipassword"), min: 8, max: 30 },
        ];

        for (const field of fields) {
            if (field.input.value.length < field.min || field.input.value.length > field.max) {
                errorSpan.innerHTML = "Un ou plusieurs champs sont mal remplis ou incorrects";
                console.error(
                    "Soumission du formulaire annulée, tout les champs ne sont pas correctement remplis, veuillez réessayer"
                );
                e.preventDefault();
                return;
            }
        }
    });

</script>