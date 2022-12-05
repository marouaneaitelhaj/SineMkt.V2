<?php

class home extends controller
{
    public function index($name)
    {
        $user = $this->model('User');
        $user->name = $name[0];
        echo $user->name;
    }
}
