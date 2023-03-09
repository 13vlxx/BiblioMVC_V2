<?php

class Controller_fournisseur extends Controller
{
    public function action_default()
    {
        $this->action_fournisseur();
    }

    public function action_fournisseur()
    {
        $this->render("fournisseur");
    }

    //* Affiche tout les fournisseurs
    public function action_all_fournisseurs()
    {
        $m = Model::get_model();
        $data = ["fournisseurs" => $m->get_all_fournisseurs()];
        $this->render("all_fournisseurs", $data);
    }
    //* Renvoie vers le formulaire d'insertion des fournisseurs
    public function action_insert_fournisseur()
    {
        $this->render("insert_fournisseur");
    }

    public function action_traitement_insert_fournisseur()
    {

        if (isset($_POST['submit'])) {
            $m = Model::get_model();
            $m->get_traitement_insert_fournisseur();
            // $data = ["add_livre" => $m->get_add_livre(),"position" => 1];
            $data = ["fournisseurs" => $m->get_all_fournisseurs()];
            $this->render("all_fournisseurs", $data);
        } else {
            $this->render("insert_fournisseur");
        }
    }

    //* Select affichant toutes les raisons sociales
    public function action_all_raison_sociale()
    {
        $m = Model::get_model();
        $data = ["raison_sociale" => $m->get_all_raison_sociale()];
        $this->render("all_raison_sociale", $data);
    }

    //* Affiche tout les fournisseurs avec la raison sociale choisie
    public function action_all_raison_sociale_list()
    {
        $m = Model::get_model();
        $data = ["rs_list" => $m->get_all_raison_sociale_list()];
        $this->render("all_raison_sociale_list", $data);
    }

    //* Select affichant toutes les localités
    public function action_all_localite()
    {
        $m = Model::get_model();
        $data = ["localite" => $m->get_all_localite()];
        $this->render("all_localite", $data);
    }

    //* Affiche tout les fournisseurs avec la localité choisie
    public function action_all_localite_list()
    {
        $m = Model::get_model();
        $data = ["localite_list" => $m->get_all_localite_list()];
        $this->render("all_localite_list", $data);
    }

    //* Select affichant tous les pays
    public function action_all_pays()
    {
        $m = Model::get_model();
        $data = ["pays" => $m->get_all_pays()];
        $this->render("all_pays", $data);
    }

    //* Affiche tout les fournisseurs avec le pays choisi
    public function action_all_pays_list()
    {
        $m = Model::get_model();
        $data = ["pays" => $m->get_all_pays_list()];
        $this->render("all_pays_list", $data);
    }

}

?>