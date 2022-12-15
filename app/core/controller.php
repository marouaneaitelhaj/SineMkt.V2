<?php

class controller
{

    public function model($model)
    {

        require_once '../app/models/' . $model . '.php';
        return new $model();
    }
    public function view($view, $data = [])
    {


        if (session_status() == PHP_SESSION_NONE) {
            session_start();
        }
        if (isset($_SESSION["username"])) {
            include_once '../app/views/home/headerAdmin.php';
        } else {
            include_once '../app/views/home/headerUser.php';
        }
        include_once '../app/views/home/' . $view . '.php';
    }
}
