<?php

class Controller_commande extends Controller
{
    public function action_default()
    {
        $this->action_commande();
    }

    public function action_commande()
    {
        $this->render("home");
    }

    //* Affiche tout les fournisseurs
    public function action_all_commandes()
    {
        $m = Model::get_model();
        $data = ["commandes" => $m->get_all_commandes()];
        $this->render("all_commandes", $data);
    }
    //* Renvoie vers le formulaire d'insertion des fournisseurs
/*     public function action_all_nom_fournisseur()
    {
        $m = Model::get_model();
        $data = ["nom_fournisseur" => $m->get_all_nom_fournisseur()];
        $this->render("all_nom_fournisseur", $data);
    }

    public function action_list_nom_fournisseur()
    {
        $id = $_POST['nom_fournisseur'];

        if (isset($_POST['nom_fournisseur'])) {
            $m = Model::get_model();
            $data = ["list_nom_fournisseur" => $m->get_list_nom_fournisseur($id)];
            $this->render("list_nom_fournisseur", $data);
        }
    } */

    public function action_insert_commande()
    {
        $m = Model::get_model();
        $data = ["livre" => $m->get_all_clivre(), "fournisseur" => $m->get_insert_cfournisseur()];
        $this->render("insert_commande", $data);
    }

    //* Traitement insertion commande
    public function traitement_insert_commande()
    {

    }

    public function action_all_ctitre()
    {
        $m = Model::get_model();
        $data = ["nom_titre" => $m->get_all_ctitre(), "position" => 1];
        $this->render("all_ctitre", $data);
        /* var_dump($data); */

    }

    public function action_list_ctitre()
    {
        $id = $_POST['ctitre'];

        if (isset($_POST['submit'])) {
            $m = Model::get_model();
            $data = ["list_ctitre" => $m->get_list_ctitre($id), "nom_titre" => $m->get_all_ctitre(), "position" => 2];
            $this->render("all_ctitre", $data);
        }
    }

    public function action_all_cfournisseur()
    {
        $m = Model::get_model();
        $data = ["nom_fournisseur" => $m->get_all_cfournisseur(), "position" => 1];
        $this->render("all_cfournisseur", $data);
        /* var_dump($data); */

    }

    public function action_list_cfournisseur()
    {
        $id = $_POST['cfournisseur'];

        if (isset($_POST['submit'])) {
            $m = Model::get_model();
            $data = ["list_cfournisseur" => $m->get_list_cfournisseur($id), "nom_fournisseur" => $m->get_all_cfournisseur(), "position" => 2];
            $this->render("all_cfournisseur", $data);
        }
    }
    public function action_all_date()
    {
        $m = Model::get_model();
        $data = ["date" => $m->get_all_date(), "position" => 1];
        $this->render("all_date", $data);
        /* var_dump($data); */

    }

    public function action_list_date()
    {
        $id = $_POST['date'];

        if (isset($_POST['submit'])) {
            $m = Model::get_model();
            $data = ["list_date" => $m->get_list_date($id), "date" => $m->get_all_date(), "position" => 2];
            $this->render("all_date", $data);
        }
    }

}

?>