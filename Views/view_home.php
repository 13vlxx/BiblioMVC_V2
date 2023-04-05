<div class="form">
    <form action="?controller=login&action=login" method="post">
        <h3>Connexion</h3>
        <p>Entrez vos identifiants pour vous connecter :</p>
        <table>
            <tr>
                <td><label for="email">Adresse e-mail : </label></td>
                <td><input type="email" id="email" name="email" /></td>
            </tr>
            <tr>
                <td><label for="password">Mot de Passe : </label></td>
                <td>
                    <div class="password-container">
                        <input type="password" id="password" name="password" />
                        <button id="toggle-password-visibility" type="button"><i class="fa fa-eye"></i></button>
                    </div>
                </td>
            </tr>
            <tr style="text-align: center">
                <td><input type="submit" id="submit" name="login" value="Se connecter" /></td>
                <td><a id="sign_up" href="?controller=home&action=sign_up">Inscrivez-vous</a></td>
            </tr>
        </table>
    </form>
</div>

<script>
    const togglePasswordVisibilityButton = document.querySelector("#toggle-password-visibility");
    const passwordInput = document.querySelector("#password");

    togglePasswordVisibilityButton.addEventListener("click", function () {
        if (passwordInput.type === "password") {
            passwordInput.type = "text";
            togglePasswordVisibilityButton.innerHTML = '<i class="fa fa-eye-slash"></i>';
            console.log("Mot de passe visible");
        } else {
            passwordInput.type = "password";
            togglePasswordVisibilityButton.innerHTML = '<i class="fa fa-eye"></i>';
            console.log("Mot de passe invisible");
        }
    });

</script>