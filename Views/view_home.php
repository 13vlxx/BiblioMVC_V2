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
                <td><input type="password" id="password" name="password" /></td>
            </tr>
            <tr style="text-align: center">
                <td><input type="submit" id="submit" name="login" value="Se connecter" /></td>
                <td><a id="sign_up" href="?controller=home&action=sign_up">Inscrivez-vous</a></td>
            </tr>
        </table>
    </form>
</div>