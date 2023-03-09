<?php

class Model
{ // Début de la Classe

    private $bd;

    private static $instance = null;

    /*
     * Constructeur créant l'objet PDO et l'affectant à $bd
     */
    private function __construct()
    { // Fonction qui sert à faire le lien avec la BDD

        $dsn = "mysql:host=localhost;dbname=bd_livres"; // Coordonnées de la BDD
        $login = "root"; // Identifiant d'accès à la BDD
        $mdp = ""; // Mot de passe d'accès à la BDD
        $this->bd = new PDO($dsn, $login, $mdp);
        $this->bd->query("SET NAMES 'utf8'");
        $this->bd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    }


    // get_model()

    public static function get_model()
    { // Fonction qui sert à créer une instance de Model pour l'appeler dans chaque Controller (équivalent de $connex)
        if (is_null(self::$instance)) {
            self::$instance = new Model();
        }
        return self::$instance;
    }

    public function get_sign_up_user()
    {
        $nom = $_POST['nom'];
        $prenom = $_POST['prenom'];
        $email = $_POST['email'];
        $password = $_POST['password'];
        $r = $this->bd->prepare("INSERT INTO `users`(`nom`, `prenom`, `mail`, `password`) 
        VALUES (:nom,:prenom,:email,:pass)");
        $r->bindParam(':nom', $nom);
        $r->bindParam(':prenom', $prenom);
        $r->bindParam(':email', $email);
        $r->bindParam(':pass', $password);
        $r->execute();
    }

    public function get_login_user()
    {
        $email = $_POST['email'];
        $password = $_POST['password'];
        $r = $this->bd->prepare("SELECT * FROM `users` WHERE mail=:email AND password=:password");
        $r->bindParam(':email', $email);
        $r->bindParam(':password', $password);
        $r->execute();

        if ($r->rowCount() > 0) {
            // Connect the user
            $user = $r->fetch(PDO::FETCH_OBJ);
            return $user;
        }
    }

}