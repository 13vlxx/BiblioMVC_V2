<?php


abstract class Controller
{
    abstract public function action_default();

    public function __construct()
    {
        if (isset($_GET['action']) and method_exists($this, "action_" . $_GET['action'])) {
            $action = "action_" . $_GET['action'];
            $this->$action();
        } else {
            $this->action_default();
        }
    }

    protected function render($vue, $data = [])
    {
        extract($data);
        $file_name = "Views/view_" . $vue . ".php";
        if (file_exists($file_name)) {
            require($file_name);
        } else {
            $this->action_error("pas de vue");
        }
    }
    protected function action_error($message)
    {
        $data = ['error' => $message];
        $this->render('error', $data);
        die();
    }

}

?>