<?php

class Controller_livre extends Controller
{
    public function action_default()
    {
        $this->action_livre();
    }

    public function action_livre()
    {
        $this->render("livre");
    }

    //* Recupere tout les livres
    public function action_all_livres()
    {
        $m = Model::get_model();
        $data = ["livres" => $m->get_all_livres()];
        $this->render("all_livres", $data);
    }

    //* Formulaire de modification d'livre
    public function action_edit_livre()
    {
        $id = $_GET['id'];
        $m = Model::get_model();
        $data = ['livre' => $m->get_edit_livre($id)];
        $this->render("edit_livre_form", $data);
    }

    //* Valider modification d'un livre
    public function action_traitement_edit_livre()
    {

        if (isset($_POST['submit'])) {
            $m = Model::get_model();
            $m->get_traitement_edit_livre();
            $data = ["livres" => $m->get_all_livres()];
            $this->render("all_livres", $data);
        } else {
            $this->render("edit_livre");
        }
    }


    //* Supprimer un livre

    public function action_delete_livre()
    {
        $id = $_GET['id'];
        $m = Model::get_model();
        $m->get_delete_livre($id);
        $livres = $m->get_all_livres();
        $data = ['livres' => $livres];
        $this->render("all_livres", $data);
    }

    //* Recupere tout les titres dans le select
    public function action_all_titres()
    {
        $m = Model::get_model();
        $data = ["titres" => $m->get_all_titres()];
        $this->render("all_titres", $data);
    }

    public function action_all_titres_list()
    {
        $m = Model::get_model();
        $data = ["titres" => $m->get_all_titres_list()];
        $this->render("all_titres_list", $data);
    }
    //* Meme chose pour les auteurs
    public function action_all_auteurs()
    {
        $m = Model::get_model();
        $data = ["auteurs" => $m->get_all_auteurs()];
        $this->render("all_auteurs", $data);
    }

    public function action_all_auteurs_list()
    {
        $m = Model::get_model();
        $data = ["auteurs" => $m->get_all_auteurs_list()];
        $this->render("all_auteurs_list", $data);
    }

    //* Meme chose pour les éditeurs
    public function action_all_editeurs()
    {
        $m = Model::get_model();
        $data = ["editeurs" => $m->get_all_editeurs()];
        $this->render("all_editeurs", $data);
    }

    public function action_all_editeurs_list()
    {
        $m = Model::get_model();
        $data = ["editeurs" => $m->get_all_editeurs_list()];
        $this->render("all_editeurs_list", $data);

    }
    //* Insertion de livres
    public function action_insert_livre()
    {
        $this->render("insert_livre");
    }
    //* Traitement insert livre
    public function action_traitement_insert_livre()
    {

        if (isset($_POST['submit'])) {
            $m = Model::get_model();
            $m->get_traitement_insert_livre();
            // $data = ["add_livre" => $m->get_add_livre(),"position" => 1];
            $data = ["livres" => $m->get_all_livres()];
            $this->render("all_livres", $data);
        } else {
            $this->render("insert_livre");
        }
    }
}

?>