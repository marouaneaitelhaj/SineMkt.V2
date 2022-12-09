<?php
class Authentication extends controller
{
    public $usr;
    public $psw;
    public function __construct()
    {
        session_start();
        $this->view('Authentication');
        $db = $this->model('Database');
        if (isset($_POST['btn'])) {
            $this->usr = $_POST['Username'];
            $this->psw = $_POST['Password'];

            while ($username = mysqli_fetch_row($db->Username) and $pasword = mysqli_fetch_row($db->Password)) {
                if (!empty($this->usr) and !empty($this->psw)) {
                    if ($this->usr == $username[0] and $this->psw == $pasword[0]) {
                        $_SESSION["username"] = $username;
                        echo '<script type="text/javascript">document.body.innerHTML = "";</script>';
                        $this->view('addProduct');
                        
                    }
                    else{
                        
                    }
                }
            }
        }
    }
}
