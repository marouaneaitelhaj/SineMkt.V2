<?php

class home extends controller
{
    
    public function index($name)
    {
        $user = $this->model('User');
        if(isset($name[0])){
        $user->name = $name[0];
        echo $user->name;
        $this->view('home/view', ['name' => $user->name]);
    }
    }
}
