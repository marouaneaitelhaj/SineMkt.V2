<?php
class logout extends controller
{
    public function __construct()
    {
        session_start();
        if(isset($_SESSION["username"])){
        unset($_SESSION["username"]);
        session_destroy();
        $this->view('Authentication');
    } else{
        $this->view('Authentication');
    }
        
    }
}
