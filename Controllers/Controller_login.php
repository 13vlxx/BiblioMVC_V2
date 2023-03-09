<?php

class Controller_login extends Controller
{
    public function action_default()
    {
        $this->action_home();
    }


    public function action_home()
    {
        $this->render("home");
    }
    public function action_login()
    {
        if (isset($_POST['login'])) {
            $m = Model::get_model();
            $user = $m->get_login_user();

            $nom = $user->nom;
            $prenom = $user->prenom;
            $isAdmin = $user->admin;

            $_SESSION['nom'] = $nom;
            $_SESSION['prenom'] = $prenom;
            $_SESSION['isAdmin'] = $isAdmin;
            if ($_SESSION['isAdmin'] === 1) {
                header('Location: admin/?controller=home&action=home');
            } else {
                header('Location: user/?controller=home&action=home');
            }
            if (!$user) {
                header('Location: ?controller=home&action=home');
            }

            $this->render("home");

        } else {
        }
    }
}
/*             if ($isAdmin === 1) {
$this->render("home");
} else {
$this->render("home");
}*/

?>