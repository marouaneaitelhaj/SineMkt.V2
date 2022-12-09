<?php
class logout extends controller
{
    public function __construct()
    {
        if(isset($_SESSION["username"])){
        session_start();
        unset($_SESSION["username"]);
        session_destroy();
    } else{
        $this->view('Authentication');
    }
        
    }
}
