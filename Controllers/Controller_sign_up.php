<?php

class Controller_sign_up extends Controller
{
    public function action_default()
    {
        $this->action_home();
    }


    public function action_home()
    {
        $this->render("home");
    }
    public function action_insert_user()
    {
        if (isset($_POST['submit'])) {
            $m = Model::get_model();
            $m->get_sign_up_user();
            $this->render("home");
        } else {
            $this->render("sign_up");
        }
    }
}

?>