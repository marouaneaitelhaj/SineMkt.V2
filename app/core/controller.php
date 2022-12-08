<?php

class controller
{

    public function model($model)
    {
        
        require_once '../app/models/' . $model . '.php';
        return new $model();
    }
    public function view($view){
        require_once '../../OOP-PHP/app/views/home/' . $view . '.php';
    }
}
