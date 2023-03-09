<div class="form">
    <form action="?controller=sign_up&action=insert_user" method="post">
        <h3>Inscription</h3>
        <p>Entrez vos informations pour vous inscrire</p>
        <table>
            <tr>
                <td><label for="nom">Nom : </label></td>
                <td><input type="text" id="inom" name="nom" required /></td>
            </tr>
            <tr>
                <td><label for="prenom">Prénom : </label></td>
                <td><input type="text" id="iprenom" name="prenom" required /></td>
            </tr>
            <tr>
                <td><label for="email">Adresse e-mail : </label></td>
                <td><input type="email" id="imail" name="email" required /></td>
            </tr>
            <tr>
                <td><label for="password">Mot de Passe : </label></td>
                <td><input type="password" id="ipassword" name="password" required /></td>
            </tr>
            <tr style="text-align: center">
                <td><input type="submit" id="submit" name="submit" value="S'inscrire" /></td>
                <td><a href="?controller=sign_up&action=home">Se connecter</a></td>
            </tr>
            <span id="error"></span>
        </table>
    </form>
</div>